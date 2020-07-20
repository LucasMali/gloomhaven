<?php

use Illuminate\Database\Seeder;
use App\World;
use Illuminate\Support\Facades\DB;

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
        $maxUserId = DB::table('users')->orderBy('id', 'DESC')->limit(1)->pluck('id')->get(0);

        // And now, let's create a few articles in our database:
        for ($i = 1; $i < 10; $i++) {
            World::create([
                'name' => $faker->name,
                'user_id' => rand(1, $maxUserId)
            ]);
        }
    }
}
