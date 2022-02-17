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
            'gambar' => '',
            'iks_id' => '1',
        ]);
        DB::table('pelayanans')->insert([
            'nama' => 'Ibu Hamil',
            'gambar' => '',
            'iks_id' => '1',
        ]);
        DB::table('pelayanans')->insert([
            'nama' => 'Imunisasi',
            'gambar' => '',
            'iks_id' => '1',
        ]);
        DB::table('pelayanans')->insert([
            'nama' => 'ASI Eksklusif',
            'gambar' => '',
            'iks_id' => '1',
        ]);
        DB::table('pelayanans')->insert([
            'nama' => 'TumBang Balita',
            'gambar' => '',
            'iks_id' => '1',
        ]);
        DB::table('pelayanans')->insert([
            'nama' => 'TBC',
            'gambar' => '',
            'iks_id' => '1',
        ]);
        DB::table('pelayanans')->insert([
            'nama' => 'Gangguan Jiwa',
            'gambar' => '',
            'iks_id' => '1',
        ]);
        DB::table('pelayanans')->insert([
            'nama' => 'Berhenti Merokok',
            'gambar' => '',
            'iks_id' => '1',
        ]);
        DB::table('pelayanans')->insert([
            'nama' => 'JKN',
            'gambar' => '',
            'iks_id' => '1',
        ]);
        DB::table('pelayanans')->insert([
            'nama' => 'Air Bersih',
            'gambar' => '',
            'iks_id' => '1',
        ]);
        DB::table('pelayanans')->insert([
            'nama' => 'Jamban Sehat',
            'gambar' => '',
            'iks_id' => '1',
        ]);
        DB::table('pelayanans')->insert([
            'nama' => 'Hipertensi',
            'gambar' => '',
            'iks_id' => '1',
        ]);
    }
}
