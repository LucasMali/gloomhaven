<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abilities extends Model
{
    protected $fillable = [
        'title',
        'level',
        'class_id'
    ];
}
