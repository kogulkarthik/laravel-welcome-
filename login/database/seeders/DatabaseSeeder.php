<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        DB::table('users')-> insert([
            'name' =>str::random(10),
            'email' => str::random(10),'@gmail.com',
            'password' => hash::make('password'),
            'remember_token' => str::random(10),
         
                ]); 
    }
}
