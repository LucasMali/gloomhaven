<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    // DEFAULT
    const INOX_BRUTE = 1;
    const TINKERER = 2;
    const SPELLWEAVER = 3;
    const SCOUNDREL = 4;
    const CRAGEHEART = 5;
    const MINDTHIEF = 6;

    // LOCKED
    const SUN = 7;
    const THREE_SPEARS = 8;
    const CIRCLES = 9;
    const ECLIPSE = 10;
    const CTHULHU = 11;
    const LIGHTNING = 12;
    const MUSIC_NOTE = 13;
    const ANGRY_FACE = 14;
    const SAW = 15;
    const TRIANGLES = 16;
    const TWO_MINIS = 17;

    // FORGOTTEN CIRCLES
    const DIVINER = 18;

    // JAWS
    const HATCHET = 19;
    const DEMOLITIONIST = 20;
    const VOIDWARDEN = 21;
    const RED_GUARD = 22;

    // FROSTHAVEN
    const DRIFTER = 23;
    const BLINK_BLADE = 24;
    const BANNER_SPEAR = 25;
    const DEATHWALKER = 26;
    const NECROMANCER = 27;
    const GEMINATE = 28;

    protected $fillable = [
        'name',
        'short_desc',
        'long_desc',
        'base_max_ability_cards',
        'base_health',
        'locked'
    ];
}
