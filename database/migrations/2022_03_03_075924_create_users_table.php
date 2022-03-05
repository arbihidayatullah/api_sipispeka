<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('nama');
            $table->bigInteger('nik')->unique();
            $table->integer('rt');
            $table->integer('rw');
            $table->integer('norumah');
            $table->bigInteger('nohp');
            $table->bigInteger('nowa');
            $table->string('password');
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles');
            $table->integer('desa_id')->unsigned();
            $table->foreign('desa_id')->references('id')->on('desas');
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
