<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntervensiTable extends Migration
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
            $table->text('keterangan');
            $table->integer('order_pelayanans_id')->unsigned();
            $table->foreign('order_pelayanans_id')->references('id')->on('order_pelayanans');
            $table->integer('order_konsultasis_id')->unsigned();
            $table->foreign('order_konsultasis_id')->references('id')->on('order_konsultasis');
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
        Schema::dropIfExists('intervensi');
    }
}
