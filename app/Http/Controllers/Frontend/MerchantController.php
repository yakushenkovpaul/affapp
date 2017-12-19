<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MerchantSearchRequest;
use App\Services\MerchantListingService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class MerchantController extends Controller
{
    public function __construct(MerchantListingService $merchantListingService)
    {
        $this->service = $merchantListingService;
    }

    /**
     * Вывод списка магазинов
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function shops(Request $request)
    {
        $result = $this->service->getMerchantsPaginate();

        if ($request->ajax()) {

            return response()->json([
                'html' => view('listing.merchants')
                    ->with('merchants', $result)
                    ->render(),
                'next_page_url' => $result['next_page_url']
            ]);
        }

        return view('frontend.merchants')
            ->with('merchants', $result)
            ->with('next_page_url', $result['next_page_url'])
            ->with('merchants_offset_0', $this->service->getMerchantsOffset(10,0))
            ->with('merchants_offset_1', $this->service->getMerchantsOffset(10,10))
            ->with('merchants_offset_2', $this->service->getMerchantsOffset(10,20))
            ->with('merchants_offset_3', $this->service->getMerchantsOffset(10,30));
    }

    /**
     * Вывод магазина
     *
     * @param $name
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function shop($name)
    {
        return view('frontend.merchant');
    }


    /**
     * Автоподстановка категорий в форму поиска
     *
     * @return mixed
     */

    public function autocompleteCategories()
    {
        $term = Input::get('term');

        return response()->json($this->service->getMerchantsCategoriesByAbc($term));
    }


    /**
     * Поиск
     *
     * @param MerchantSearchRequest $request
     * @return array|void
     */

    public function search(MerchantSearchRequest $request)
    {
        $data = $request->all();

        $query = (isset($data['query']))    ?   $data['query']  :   null;
        $category_id = (isset($data['category_id']))    ?   $data['category_id']    :   null;

        if(!empty($query) || !empty($category_id))
        {
            $result = $this->service->getSearch($query, $category_id);
        }
        else
        {
            $result = $this->service->getMerchantsPaginate();
        }

        return response()->json([
            'html' => view('listing.merchants')
                ->with('merchants', $result)
                ->render(),
            'next_page_url' => $result['next_page_url']
            ]
        );
    }

}