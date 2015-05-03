<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class BooksTableSeeder extends Seeder {

    public function run()
    {
    	$faker = Faker::create();
    	for ($i=0; $i < 300; $i++) { 
    		\DB::table('books')->insert(array(
    			'title'		=>  $faker->text($maxNbChars=20),
    			'synopsis'	=>  $faker->text($maxNbChars=1000),
    			'user_id'	=>  $faker->numberBetween($min=1,$max=50)
    		));
    	}
    }

}