<?php

namespace App\Services;

use DB;
use Exception;
use App\Models\Merchant;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;
use SebastianBergmann\CodeCoverage\Report\PHP;

class MerchantService
{
    /**
     * Service Model
     *
     * @var Model
     */
    public $model;

    /**
     * Service Category
     *
     * @var Category
     */

    protected $category;

    /**
     * Pagination
     *
     * @var integer
     */
    public $pagination;

    /**
     * Service Constructor
     *
     * @param Merchant $merchant
     */
    public function __construct(Merchant $merchant, Category $category)
    {
        $this->model        = $merchant;
        $this->category     = $category;
        $this->pagination   = env('PAGINATION', 25);

    }

    /**
     * All Model Items
     *
     * @return array
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * Paginated items
     *
     * @return LengthAwarePaginator
     */
    public function paginated()
    {
        return $this->model->paginate($this->pagination);
    }

    /**
     * Search the model
     *
     * @param  mixed $payload
     * @return LengthAwarePaginator
     */
    public function search($payload)
    {
        $query = $this->model->orderBy('created_at', 'desc');
        $query->where($this->model->primaryKey, 'LIKE', '%'.$payload.'%');

        $columns = Schema::getColumnListing('merchants');

        foreach ($columns as $attribute) {
            $query->orWhere($attribute, 'LIKE', '%'.$payload.'%');
        };

        return $query->paginate($this->pagination)->appends([
            'search' => $payload
        ]);
    }

    /*
    public function create($payload)
    {
        return $this->model->create($payload);
    }
    */


    /**
     * Создает продавца и связки категория-продавец
     *
     * @param array $insert
     * @param string $categories
     * @param string $subcategories
     * @return bool
     * @throws Exception
     */

    public function create($insert = array(), $categories = null, $subcategories = null)
    {
        try {
            DB::transaction(function () use ($insert, $categories, $subcategories) {

                $this->model->fill($insert);
                $this->model->save();
                $insert_id = $this->model->id;

                if(!empty($categories))
                {
                    if(is_array($categories))
                    {
                        foreach ($categories as $cat)
                        {
                            if(!Category::where('name', '=', $cat)->count())
                            {
                                $record = new Category();
                                $record->fill(array('name'=> $cat));
                                $record->save();
                            }

                            $this->assignCategory($cat, $insert_id, true);
                        }
                    }
                    else
                    {
                        if(!Category::where('name', '=', $categories)->count())
                        {
                            $record = new Category();
                            $record->fill(array('name'=> $categories));
                            $record->save();
                        }

                        $this->assignCategory($categories, $insert_id, true);
                    }
                }


                if(!empty($subcategories))
                {
                    if(is_array($subcategories))
                    {
                        foreach ($subcategories as $sub)
                        {
                            if(!Category::where('name', '=', $sub)->count())
                            {
                                $record = new Category();
                                $record->fill(array('name'=> $sub));
                                $record->save();

                                $this->assignCategory($sub, $insert_id);
                            }
                        }
                    }
                    else
                    {
                        if(!Category::where('name', '=', $subcategories)->count())
                        {
                            $record = new Category();
                            $record->fill(array('name'=> $subcategories));
                            $record->save();

                            $this->assignCategory($subcategories, $insert_id);
                        }
                    }
                }
            });
            return true;
        } catch (Exception $e) {
            echo $e->getMessage() . PHP_EOL;
            return false;
            #throw new Exception("We were unable to add merchant, please try again later.", 1);
        }
    }

    /**
     * Find Model by ID
     *
     * @param  integer $id
     * @return Model
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * Model update
     *
     * @param  integer $id
     * @param  array $payload
     * @return Model
     */
    public function update($id, $payload)
    {
        return $this->find($id)->update($payload);
    }

    /**
     * Destroy the model
     *
     * @param  integer $id
     * @return bool
     */
    public function destroy($id)
    {
        return $this->model->destroy($id);
    }

    /**
     * Assign a category to the merchant
     *
     * @param $categoryName
     * @param $merchantId
     * @param bool $main
     */

    public function assignCategory($categoryName, $merchantId, $main = false)
    {
        $category = $this->category->findByName($categoryName);
        $merchant = $this->model->find($merchantId);

        $merchant->categories()->attach($category, array('main' => $main));
    }

    /**
     * Unassign a category from the merchant
     *
     * @param  string $categoryName
     * @param  integer $merchantId
     * @return void
     */
    public function unassignCategory($categoryName, $merchantId)
    {
        $category = $this->category->findByName($categoryName);
        $merchant = $this->model->find($merchantId);

        $merchant->categories()->detach($category);
    }

    /**
     * Unassign all categories from the merchant
     *
     * @param  integer $merchantId
     * @return void
     */

    public function unassignAllRoles($merchantId)
    {
        $merchant = $this->model->find($merchantId);
        $merchant->categories()->detach();
    }


    /**
     * Возвращает список клубов в избранном
     *
     * @return array
     */

    public function favoritesList()
    {
        $result = [];

        if($user = request()->user())
        {
            $result = $user->favorites($this->model)->paginate($this->pagination);
        }

        return $result;
    }

    /**
     * Убирает из списка избранного
     *
     * @param $id
     * @return mixed
     */

    public function favoritesDestroy($id)
    {
        if($user = request()->user())
        {
            return $user->unfavorite($this->find($id));
        }
    }

}
