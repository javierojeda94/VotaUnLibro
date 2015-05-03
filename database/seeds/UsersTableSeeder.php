<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();
        for($i=0;$i<50;$i++){
        	\DB::table('users')->insert(array(
        		'name'		=>	$faker->firstName,
        		'username'	=>	$faker->userName,
        		'password'	=>  $faker->password,
        		'email'		=> 	$faker->unique()->email
        	));
        }
    }

}