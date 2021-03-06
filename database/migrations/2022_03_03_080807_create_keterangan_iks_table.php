<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeteranganIksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keterangan_iks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('keterangan');
            $table->string('warna');
            $table->integer('nilai_id')->unsigned();
            $table->foreign('nilai_id')->references('id')->on('nilais');
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
        Schema::dropIfExists('keterangan_iks');
    }
}
