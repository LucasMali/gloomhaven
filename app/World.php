<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class World extends Model
{
    protected $fillable = [
        'user_id', 'name'
    ];

    public function party()
    {
        return $this->hasOne('App\Party');
    }

    public function parties()
    {
        return $this->hasMany('App\Party');
    }
}
