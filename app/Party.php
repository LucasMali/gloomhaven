<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'location',
        'solo',
        'reputation',
        'price_modifier',
        'donate_gold',
        'prosperity_city_level',
        'prosperity_checkmarks',
        'notes',
        'campaign_id',
        'users_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'users_id'
    // ];
}
