<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJawabanIksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_iks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jawaban');
            $table->integer('soal_iks_id')->unsigned();
            $table->foreign('soal_iks_id')->references('id')->on('soal_iks');
            $table->integer('iks_id')->unsigned();
            $table->foreign('iks_id')->references('id')->on('iks');

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
        Schema::dropIfExists('jawaban_iks');
    }
}
