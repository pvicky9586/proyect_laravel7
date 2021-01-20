<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
	
	   
    //SET FOREIGN_KEY_CHECKS = 0;

    DB::table('users')->truncate();
   // DB::table('professions')->truncate();

    $this->call(ProfessionTableSeeder::class); //ejecutar seeder una sola vez de lo contrario descom linea e ingresar registros manualmente

    
    $this->call(UserSeeder::class);

    //SET FOREIGN_KEY_CHECKS = 1;
  
     

    }


}
