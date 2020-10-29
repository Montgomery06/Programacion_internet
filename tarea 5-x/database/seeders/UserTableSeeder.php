<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user = new User();
    	$user->name = "Roman";
    	$user->email = "romanale_@hotmail.com";
    	$user->password = bcrypt("secret");
    	$user->save();
        //
    }
}