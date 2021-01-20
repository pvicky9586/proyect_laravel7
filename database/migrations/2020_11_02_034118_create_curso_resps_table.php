<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoRespsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_resps', function (Blueprint $table) {
           	$table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('curso_id')->nullable();
            $table->unsignedBigInteger('resp_id')->nullable();

            $table->foreign('curso_id')->references('id')->on('cursos')
            ->onDelete('set null')
            ->onUpdate('cascade');
            
            $table->foreign('resp_id')->references('id')->on('responsabls')
            ->onDelete('set null')
            ->onUpdate('cascade');
            
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
        Schema::dropIfExists('curso_resps');
    }
}
