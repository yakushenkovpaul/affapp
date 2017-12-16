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


    /**
     * Возвращает пять клубов по запросу
     *
     *
     * @param string $abc
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection|static[]
     */

    public function getClubsByAbc($abc)
    {
        return $this->newQuery()
            ->where('name', 'LIKE', '%'.$abc.'%')
            ->take(5)
            ->select(['id', 'name'])
            ->get();
    }


}
