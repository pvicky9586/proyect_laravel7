<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Cache;

class CreateResponsablsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsabls', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->integer('cedula')->unique();
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->integer('telef')->nullable();
            $table->string('NroWp')->nullable();
           
            
            $table->unsignedBigInteger('profile_id')->nullable();
            $table->unsignedBigInteger('profession_id')->nullable();
            
            
            $table->integer('user_created');
            $table->integer('user_updated')->nullable();
            $table->timestamps();

            $table->foreign('profile_id')->references('id')->on('profiles')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->foreign('profession_id')->references('id')->on('professions')
            ->onDelete('set null')
            ->onUpdate('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responsabls');
    }
}
