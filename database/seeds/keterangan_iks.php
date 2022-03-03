<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class keterangan_iks extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('keterangan_iks')->insert([
            'keterangan' => 'Sehat',
            'warna' => 'Hijau',
            'nilai_id' => 1
        ]);
        DB::table('keterangan_iks')->insert([
            'keterangan' => 'Pra-Sehat',
            'warna' => 'Kuning',
            'nilai_id' => 1
        ]);
        DB::table('keterangan_iks')->insert([
            'keterangan' => 'Tidak Sehat',
            'warna' => 'Merah',
            'nilai_id' => 1
        ]);
    }
}
