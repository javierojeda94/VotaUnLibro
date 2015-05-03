<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class ReviewsTableSeeder extends Seeder {

    public function run()
    {
    	$faker = Faker::create();
    	for ($i=0; $i < 500; $i++) { 
    		\DB::table('reviews')->insert(array(
    			'title'			=>	$faker->text($maxNbChars=20),
    			'long_review'	=>	$faker->text($maxNbChars=250),
    			'book_id'		=>	$faker->numberBetween($min=1,$max=300),
    			'user_id'		=>	$faker->numberBetween($min=1,$max=50)
    		));
    	}
    }

}