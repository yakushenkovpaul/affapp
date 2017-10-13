<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public $table = "sales";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'status',
		'value',
		'comission',
		'merchant_id',
		'user_id',
		'club_id',
		'service_fee',
		'commission',
		'updated_at',
		'created_at',
    
];

    public static $rules = [
        // create rules
    ];
    // Sale 
}
