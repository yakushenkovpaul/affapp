<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sale extends Model
{
    public $table = "sales";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'status',
		'value',
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

    /**
     * Sale Merchant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */

    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }

    /**
     * Sale User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Club sales
     *
     * @param $paginate
     * @param $club_id
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */

    public function club($paginate, $club_id)
    {
        return $this->newQuery()
            ->where('club_id', '=', $club_id)
            ->orderBy('updated_at','DESC')
            ->paginate($paginate);
    }

    /**
     * Most recent sale clubs merchants
     *
     * @param $paginate
     * @param $club_id
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */

    public function clubMerchants($paginate, $club_id)
    {
        return $this->newQuery()
            ->where('club_id', '=', $club_id)
            ->orderBy('id','DESC')
            ->paginate($paginate);
    }

}
