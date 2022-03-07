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
            'pelayanan_id' => 1
        ]);
        DB::table('soal_iks')->insert([
            'soal' => 'Apakah ibu melakukan persalinan di fasilitas kesehatan ?',
            'pelayanan_id' => 2
        ]);
        DB::table('soal_iks')->insert([
            'soal' => 'Apakah bayi mendapat imunisasi dasar lengkap ?',
            'pelayanan_id' => 3
        ]);
        DB::table('soal_iks')->insert([
            'soal' => 'Apakah bayi mendapat Air Susu Ibu (ASI) ekslusif ?',
            'pelayanan_id' => 4
        ]);
        DB::table('soal_iks')->insert([
            'soal' => 'Apakah balita mendapatkan pemantauan pertumbuhan ?',
            'pelayanan_id' => 5
        ]);
        DB::table('soal_iks')->insert([
            'soal' => 'Apakah penderita tuberkulosis paru mendapatkan pengobatan sesuai ?',
            'pelayanan_id' => 6
        ]);
        DB::table('soal_iks')->insert([
            'soal' => 'Apakah penderita hipertensi melakukan pengobatan secara teratur ?',
            'pelayanan_id' => 7
        ]);
        DB::table('soal_iks')->insert([
            'soal' => 'Apakah penderita gangguan jiwa mendapatkan pengobatan dan tidak ?',
            'pelayanan_id' => 8
        ]);
        DB::table('soal_iks')->insert([
            'soal' => 'Apakah anggota keluarga tidak ada yang merokok ?',
            'pelayanan_id' => 9
        ]);
        DB::table('soal_iks')->insert([
            'soal' => 'Apakah keluarga sudah menjadi anggota Jaminan Kesehatan Nasional ?',
            'pelayanan_id' => 10
        ]);
        DB::table('soal_iks')->insert([
            'soal' => 'Apakah keluarga mempunyai akses sarana air bersih ?',
            'pelayanan_id' => 11
        ]);
        DB::table('soal_iks')->insert([
            'soal' => 'Apakah keluarga mempunyai akses atau menggunakan jamban sehat ?',
            'pelayanan_id' => 12
        ]);
    }
}
