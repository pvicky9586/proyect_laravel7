<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
			
		//TRUNCAR TABLA users E INSERTAR SEEDER
		//DB::table('users')->truncate();
        $this->call([
        UserSeeder::class
        //PostSeeder::class,
        //CommentSeeder::class,
    ]);
       
       // $this->call(UserSeeder::class);
    }
}
