<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class iklan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('iklans')->insert([
            'deskripsi' => '12 Indikator Keluarga Sehat',
            'gambar' => 'images/gambar_1_IndikatorPIsPK.jpg',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Keluarga Berencana',
            'gambar' => 'images/Poster_2_KB.jpg',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Keluarga Berencana 2',
            'gambar' => 'images/Poster_3_KB2.jpg',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Keluarga Berencana Nasional',
            'gambar' => 'images/Poster_4_KB3.jpeg',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Waspadai Hipertensi',
            'gambar' => 'images/Poster5_Hipertensi1.png',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Mencegah Tekanan Darah Tinggi',
            'gambar' => 'images/Poster6_Hipertensi2.jpg',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Faktor Resiko Hipertensi',
            'gambar' => 'images/Poster7_HIpertensi3.jpg',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Gejala Hipertensi',
            'gambar' => 'images/POster8_Hipertensi4.jpg',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Ibu Melakukan Persalinan di Fasilitas Kesehatan',
            'gambar' => 'images/Poster9_LahirFaskes1.jpg',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Menjaga Ibu Hamil dan Janin Sehat-Cerdas',
            'gambar' => 'images/Poster10_LahirFaskes.jpg',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Lindungi Ibu Hamil',
            'gambar' => 'images/Poster11_LahirFaskes3.jpg',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Ayo Imunisasi',
            'gambar' => 'images/Poster12_Imunisasi1.jpg',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Sayangi Buah Hati Anda, Pastikan Mereka Mendapatkan Imunisasi Rutin Lengkap',
            'gambar' => 'images/Poster13_Imunisasi2.jpg',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'ASI Eksklusif Cegah Stunting',
            'gambar' => 'images/Poster14_ASI1.png',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => '3 Tahapan ASI',
            'gambar' => 'images/Poster16_ASI3.jpg',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Tumbuh Kembang Anak',
            'gambar' => 'images/Poster19_tumbang3.jpg',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Tumbuh Kembang Anak Dari Tahun Ke Tahun',
            'gambar' => 'images/Poster20_Tumbang4.jpg',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Kenali Gejala Tuberkolosis',
            'gambar' => 'images/Poster21_TBC1.jpg',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Gejala TBC',
            'gambar' => 'images/Poster22_TBC2.jpg',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Tuberkolosis Kebal Obat',
            'gambar' => 'images/Poster23_TBC3.png',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Kendalikan Hipertensi dengan Patuh',
            'gambar' => 'images/Poster26_Hipertensi2.jpg',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Aksi Kurangi Penderita Hipertensi',
            'gambar' => 'images/Poster27_Hipertensi3.png',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Gangguan Jiwa Dapat Disembuhkan',
            'gambar' => 'images/Poster28_ODGJ1.jpeg',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => '10 Tips Merawat Diri Sehari-hari Untuk ODGJ',
            'gambar' => 'images/POster29_ODGJ2.jpg',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Pentingnya Litersasi Kesehatan Mental',
            'gambar' => 'images/Poster30_ODGJ3.png',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Jangan Malu Mengatakan Saya Bukan Perokok',
            'gambar' => 'images/Poster31_Rokok2.png',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Dilarang Merokok',
            'gambar' => 'images/Poster32_Rokok3.jpg',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Jaminan Kesehatan Nasional',
            'gambar' => 'images/Poster33_JKN1.jpg',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Jaminan Kesehatan Nasional 2',
            'gambar' => 'images/Poster34_JKN2.jpg',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Taukah kamu kader JKN-KIS',
            'gambar' => 'images/Poster35_JKN3.jpg',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Gunakan Air Bersih',
            'gambar' => 'images/Poster36_Airbersih1.jpg',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Manfaat menggunakan air bersih',
            'gambar' => 'images/Poster37_AirBersih2.jpg',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Gunakan Jamban Sehat',
            'gambar' => 'images/Poster38_Jamban1.jpg',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Sudah sehatkan jamban di rumahmu?',
            'gambar' => 'images/Poster39_Jamban2.jpg',
        ]);
        DB::table('iklans')->insert([
            'deskripsi' => 'Perbaiki Sanitasi',
            'gambar' => 'images/Poster40_Jamban3.jpg',
        ]);
    }
}
