<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    const GLOOMHAVEN = 1;
    const FORGOTTEN_CIRCLE = 2;
    const JAWS = 3;
    const FROSTHAVEN = 4;

    const CAMPAIGNS = [
        self::GLOOMHAVEN,
        self::FORGOTTEN_CIRCLE,
        self::JAWS,
        self::FROSTHAVEN
    ];
}
