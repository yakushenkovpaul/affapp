<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = "categories";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'name',
    
];

    public static $rules = [
        // create rules
    ];
    // Category

    /**
     * Find a role by name
     *
     * @param  string $name
     * @return Role
     */
    public static function findByName($name)
    {
        return Category::where('name', $name)->firstOrFail();
    }


    /**
     * Возвращает пять категорий по запросу
     *
     * @param $abc
     * @return \Illuminate\Support\Collection
     */

    public function getCategoriesByAbc($abc)
    {
        return $this->newQuery()
            ->where('name', 'LIKE', '%'.$abc.'%')
            ->take(5)
            ->select(['id', 'name'])
            ->get();
    }

}
