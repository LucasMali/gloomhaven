<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Characters extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'class',
        'level',
        'experience',
        'gold',
        'donated_gold',
        'notes',
        'campaign_id',
        'users_id',
        'check_marks',
        'modifiers',
        'item_sets',
        'abilities',
        'quest' // life goal
    ];
}
