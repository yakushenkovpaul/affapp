<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    public $table = "clubs";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'name',
		'image',
		'url',
		'country',
		'address',
		'zip',
		'contacts',
		'bank_details',
		'fans',
		'total_commission',
		'total_paid',
		'fee'
    ];

    protected $hidden = ['rate'];

    public static $rules = [
        // create rules
    ];
    // Club 
}
