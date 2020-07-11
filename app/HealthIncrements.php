<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthIncrements extends Model
{
    const DEFAULT_INOX_BRUTE = 1;
    const DEFAULT_TINKERER = 2;

    protected $fillable = [
        'class',
        'level',
        'health'
    ];
}
