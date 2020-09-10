<?php

namespace Tests\Unit;

use App\World;
use PHPUnit\Framework\TestCase;

class WorldTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testModelCreate()
    {
        $_fake = \Faker\Factory::create();
        $_name = $_fake->name;
        $_world = new World(['name'=>$_name]);
        $this->assertTrue($_world->name === $_name);
    }
}
