<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if(!App\User::count())
        {
            $this->call(UsersTableSeeder::class);
        }
        // if(!App\Customer::count())
        // {
        //     $this->call(CustomersTableSeeder::class);
        // }
    }
}
