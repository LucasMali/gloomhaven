<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievements extends Model
{
    protected $fillable = [
        'name',
        'conditions',
        'campaign_id',
        'type'
    ];
}
