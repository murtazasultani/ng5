<?php

use Illuminate\Database\Seeder;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
        	'name' => 'Murtaza',
	        'email' => 'murtaza@email.com',
	        'password' => bcrypt('murtaza'),
	        'remember_token' => str_random(10)
        ]);

        factory('App\User', 4)->create();
    }
}
