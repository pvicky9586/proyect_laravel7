<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncripcionPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incripcion_pagos', function (Blueprint $table) {
            $table->bigIncrements('id');             
            $table->integer('id_curso');
            $table->integer('id_part');	
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
