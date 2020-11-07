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
            $table->bigIncrements('id');
            $table->integer('cedula')->nullable();
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            
            $table->string('username',10)->unique();
            $table->string('email')->unique();//$table->timestamp('email_verified_at');
            $table->string('password');            
            $table->integer('privileges');            
            $table->integer('id_user_created')->nullable();
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
