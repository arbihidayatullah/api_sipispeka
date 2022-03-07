<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pelayanan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pelayanans')->insert([
            'nama' => 'Keluarga Berencana',
            'gambar' => 'images/KeluargaBerencana.png',
            // 'iks_id' => 1,
        ]);
        DB::table('pelayanans')->insert([
            'nama' => 'Ibu Hamil',
            'gambar' => 'images/IbuHamil.png',
            // 'iks_id' => 1,
        ]);
        DB::table('pelayanans')->insert([
            'nama' => 'Imunisasi',
            'gambar' => 'images/Imunisasi.png',
            // 'iks_id' => 1,
        ]);
        DB::table('pelayanans')->insert([
            'nama' => 'ASI Eksklusif',
            'gambar' => 'images/ASIEkslusif.png',
            // 'iks_id' => 1,
        ]);
        DB::table('pelayanans')->insert([
            'nama' => 'TumBang Balita',
            'gambar' => 'images/TumbangBalita.png',
            // 'iks_id' => 1,
        ]);
        DB::table('pelayanans')->insert([
            'nama' => 'TBC',
            'gambar' => 'images/TBC.png',
            // 'iks_id' => 1,
        ]);
        DB::table('pelayanans')->insert([
            'nama' => 'Hipertensi',
            'gambar' => 'images/Hipertensi.png',
            // 'iks_id' => 1,
        ]);
        DB::table('pelayanans')->insert([
            'nama' => 'Gangguan Jiwa',
            'gambar' => 'images/GangguanJiwa.png',
            // 'iks_id' => 1,
        ]);
        DB::table('pelayanans')->insert([
            'nama' => 'Berhenti Merokok',
            'gambar' => 'images/BerhentiMerokok.png',
            // 'iks_id' => 1,
        ]);
        DB::table('pelayanans')->insert([
            'nama' => 'JKN',
            'gambar' => 'images/JKN.png',
            // 'iks_id' => 1,
        ]);
        DB::table('pelayanans')->insert([
            'nama' => 'Air Bersih',
            'gambar' => 'images/AirBersih.png',
            // 'iks_id' => 1,
        ]);
        DB::table('pelayanans')->insert([
            'nama' => 'Jamban Sehat',
            'gambar' => 'images/JambanSehat.png',
            // 'iks_id' => 1,
        ]);
    }
}
