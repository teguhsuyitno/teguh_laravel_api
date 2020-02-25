<?php

use Illuminate\Database\Seeder;
use App\User;

Use Faker\Factory as Faker;

class Userseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create();

        for($i=0; $i<=5; $i++){
            User::create([
               'name'=> $faker->name,
               'email'=> $faker->email,
               'password'=>bcrypt('secret'),
            ]);
        }
        //
    }
}
