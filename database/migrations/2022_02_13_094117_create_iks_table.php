<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nilai');
            $table->integer('soal_id')->unsigned();
            $table->foreign('soal_id')->references('id')->on('soal_iks');
            $table->integer('jawaban_id')->unsigned();
            $table->foreign('jawaban_id')->references('id')->on('jawaban_iks');
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
            $table->integer('keterangan_id')->unsigned();
            $table->foreign('keterangan_id')->references('id')->on('keterangan_iks');
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
        Schema::dropIfExists('iks');
    }
}
