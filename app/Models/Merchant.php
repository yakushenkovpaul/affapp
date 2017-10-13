<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
		'commission',
		'cashback',
		'rate',
		'added',
    
];

    public static $rules = [
        // create rules
    ];
    // Merchant 
}
