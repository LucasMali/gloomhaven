<?php

use App\Party;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Let's truncate our existing records to start from scratch.
         Party::truncate(); // Will not work with foreign keys.

         $faker = \Faker\Factory::create();
        $maxUserId = DB::table('users')->orderBy('id', 'DESC')->limit(1)->pluck('id')->get(0);
        $maxWorldId = DB::table('worlds')->orderBy('id', 'DESC')->limit(1)->pluck('id')->get(0);

        // And now, let's create a few articles in our database:
         for ($i = 1; $i < 10; $i++) {
             Party::create([
                 'name' => $faker->sentence,
                 'user_id' => rand(1, $maxUserId),
                 'location' => 'home',
                 'notes' => 'Test',
                 'world_id' => rand(1, $maxWorldId)
             ]);
         }
    }
}
