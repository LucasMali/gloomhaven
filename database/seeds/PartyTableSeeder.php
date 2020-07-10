<?php

use App\Party;
use Illuminate\Database\Seeder;

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

         // And now, let's create a few articles in our database:
         for ($i = 1; $i < 3; $i++) {
             Party::create([
                 'name' => $faker->sentence,
                 'users_id' => $i,
                 'location' => 'home',
                 'notes' => 'Test'
             ]);
         }
    }
}
