<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class kecamatan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Raja Basa',
            'kabupaten_id' => 1
        ]);
    }
}
