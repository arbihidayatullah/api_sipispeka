<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoalIksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soal_iks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('soal');
            $table->integer('pelayanan_id')->unsigned();
            $table->foreign('pelayanan_id')->references('id')->on('pelayanans');
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
        Schema::dropIfExists('soal_iks');
    }
}
