<?php

use Illuminate\Database\Seeder;
use App\World;

class WorldTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        World::create([
            'name' => $faker->name,
            'user_id' => 1
        ]);
    }
}
