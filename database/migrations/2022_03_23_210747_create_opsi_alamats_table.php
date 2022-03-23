<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpsiAlamatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opsi_alamats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status');
            $table->integer('kecamatan_id')->unsigned()->nullable();
            $table->foreign('kecamatan_id')->references('id')->on('kecamatans');
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
        Schema::dropIfExists('opsi_alamats');
    }
}
