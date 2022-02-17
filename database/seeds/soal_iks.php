<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class soal_iks extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('soal_iks')->insert([
            'soal' => 'Apakah keluarga mengikuti program Keleluarga Berencana (KB) ?',
        ]);
        DB::table('soal_iks')->insert([
            'soal' => 'Apakah ibu melakukan persalinan di fasilitas kesehatan ?',
        ]);
        DB::table('soal_iks')->insert([
            'soal' => 'Apakah bayi mendapat imunisasi dasar lengkap ?',
        ]);
        DB::table('soal_iks')->insert([
            'soal' => 'Apakah bayi mendapat Air Susu Ibu (ASI) ekslusif ?',
        ]);
        DB::table('soal_iks')->insert([
            'soal' => 'Apakah balita mendapatkan pemantauan pertumbuhan ?',
        ]);
        DB::table('soal_iks')->insert([
            'soal' => 'Apakah penderita tuberkulosis paru mendapatkan pengobatan sesuai ?',
        ]);
        DB::table('soal_iks')->insert([
            'soal' => 'Apakah penderita hipertensi melakukan pengobatan secara teratur ?',
        ]);
        DB::table('soal_iks')->insert([
            'soal' => 'Apakah penderita gangguan jiwa mendapatkan pengobatan dan tidak ?',
        ]);
        DB::table('soal_iks')->insert([
            'soal' => 'Apakah anggota keluarga tidak ada yang merokok ?',
        ]);
        DB::table('soal_iks')->insert([
            'soal' => 'Apakah keluarga sudah menjadi anggota Jaminan Kesehatan Nasional ?',
        ]);
        DB::table('soal_iks')->insert([
            'soal' => 'Apakah keluarga mempunyai akses sarana air bersih ?',
        ]);
        DB::table('soal_iks')->insert([
            'soal' => 'Apakah keluarga mempunyai akses atau menggunakan jamban sehat ?',
        ]);
    }
}
