<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //DB::table('users')->truncate(); 
			 //INSERT U8N SOLO REGISTRO
	DB::table('users')->insert([
								'username' => 'admin',
								'email' => 'developmentsoft2020@gmail.com',	
								'privileges' => '1',							
								'password' => Hash::make('123123123')
								
			]);
    }
}
