<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 1; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $faker->password
            ]);
        }

        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.admin',
            'password' => \Illuminate\Support\Facades\Hash::make('admin')
        ]);
    }
}
