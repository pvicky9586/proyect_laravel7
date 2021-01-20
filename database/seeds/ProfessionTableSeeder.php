<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//DB::table('professions')->truncate();
    	

        DB::table('professions')->insert(
        	['name' => 'Doctor', 'abrev' => 'Dor(ra)'],
       	);

       	DB::table('professions')->insert(
       		['name' => 'Profesor', 'abrev' => 'Prof'],
       	);
       	DB::table('professions')->insert(
       		['name' => 'Licenciado', 'abrev' => 'Lcdo(a)'],
       	);
       	DB::table('professions')->insert(
       		['name' => 'Ingeniero', 'abrev' => 'Ing'],
       	);
       	DB::table('professions')->insert(
       		['name' => 'Abogado', 'abrev' => 'Abg'],
       	);
       	DB::table('professions')->insert(
       		['name' => 'Contador Publico', 'abrev' => 'C.P.'],
       	);   
   		DB::table('professions')->insert(
       		['name' => 'Otra', 'abrev' => ''],
       	);
    }
}
