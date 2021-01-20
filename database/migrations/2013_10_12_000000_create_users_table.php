<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->integer('cedula')->nullable();
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            
            $table->string('username',10)->unique();
            $table->string('email')->unique();//$table->timestamp('email_verified_at');
            $table->string('password');            
            $table->integer('privileges'); 
            $table->unsignedBigInteger('profession_id')->nullable();
            $table->unsignedBigInteger('profile_id')->nullable();


            $table->foreign('profession_id')->references('id')->on('professions')
            ->onDelete('set null')
            ->onUpdate('cascade');
           
            $table->foreign('profile_id')->references('id')->on('profiles')
            ->onDelete('set null')
            ->onUpdate('cascade');
            
            $table->integer('id_user_created')->nullable();
            $table->integer('id_user_updated')->nullable();
            $table->rememberToken();

          

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
        Schema::dropIfExists('users');
    }
}
