<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
	         DB::table('users')->insert([
								'username' => 'admin',
								'email' => 'developmentsoft2020@gmail.com',	
                               // 'email_verified_at' => now(),
								'privileges' => '1',							
								'password' => Hash::make('123123123'),
                               // 'remember_token' => Str::random(10),
								
			]);
    }
}
