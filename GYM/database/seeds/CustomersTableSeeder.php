<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Customer', 30)->create()->each(function($customer){
        	$ids = range(1,5);
        	$sliced = array_slice($ids, 0);
    		$customer->users()->attach($sliced);
        });
    }
}
