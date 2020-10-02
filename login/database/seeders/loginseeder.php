<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class loginseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
   'name' =>'kogul',
   'email' => "kogul2595@gmail.com",
   'password' => hash::make('password'),
   'remember_token' => str::random(10),

       ]); 
    }
}
