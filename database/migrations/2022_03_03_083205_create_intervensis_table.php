<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntervensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intervensis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('intervensi');
            $table->string('keterangan');
            $table->integer('order_konsultasi_id')->unsigned();
            $table->foreign('order_konsultasi_id')->references('id')->on('order_konsultasis');
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
        Schema::dropIfExists('intervensis');
    }
}
