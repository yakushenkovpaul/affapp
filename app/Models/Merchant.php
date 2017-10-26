<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Merchant extends Model
{
    public $table = "merchants";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'name',
		'image',
		'description',
		'seo_title',
		'seo_description',
		'url',
		'status',
        'timeleads',
        'timesales',
        'sale_percent_max',
        'sale_percent_min',
        'sale_fix_max',
        'sale_fix_min',
        'lead_max',
        'lead_min',
        'info',
		'rate',

];

    public static $rules = [
        // create rules
    ];
    // Merchant

    /**
     * User Categories
     *
     * @return Relationship
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }


    /**
     * Check if user has category
     *
     * @param  string  $category
     * @return boolean
     */
    public function hasCategory($category)
    {
        $categories = array_column($this->categories()->toArray(), 'name');
        return array_search($category, $categories) > -1;
    }
}
