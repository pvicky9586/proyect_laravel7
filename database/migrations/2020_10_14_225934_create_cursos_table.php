<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Cache;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('title')->unique();
            $table->text('description')->nullable();    
            $table->integer('user_created');
            $table->integer('user_updated')->nullable();
            $table->string('duracion')->nullable();  
            $table->string('img')->nullable(); 
            $table->string('cant_resps')->nullable();          
            $table->integer('statud')->nullable(); //0 culminado, 1 activo, 2 pendiente
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
