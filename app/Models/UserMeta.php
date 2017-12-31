<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class UserMeta extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_meta';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'is_active',
        'activation_token',
        'lastname',
        'city',
        'birthday',
        'gender',
        'club_id',
        'mail',
    ];

    protected $hidden = [
        'rate',
    ];

    /**
     * User
     *
     * @return Relationship
     */
    public function user()
    {
        return User::where('id', $this->user_id)->first();
    }

    /**
     * User club
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function club()
    {
        return $this->belongsTo(Club::class);
    }

}
