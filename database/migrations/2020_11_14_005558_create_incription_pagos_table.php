<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncriptionPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incription_pagos', function (Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->bigIncrements('id');  
                       
			$table->unsignedBigInteger('incription_id')->nullable();
            $table->foreign('incription_id')->references('id')->on('incriptions')
            ->onDelete('cascade');            
            
            
            $table->string('meth_pago')->nullable(); 
            $table->string('pago')->nullable();            
            $table->integer('user_created')->nullable();
            $table->integer('user_updated')->nullable();
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
        Schema::dropIfExists('incripcion_pagos');
    }
}
