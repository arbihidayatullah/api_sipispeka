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
            'nama_kecamatan' => 'Bumi Waras',
            'kabupaten_id' => 1
        ]);
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Enggal',
            'kabupaten_id' => 1
        ]);
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Kedamaian',
            'kabupaten_id' => 1
        ]);
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Kedaton',
            'kabupaten_id' => 1
        ]);
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Kemiling',
            'kabupaten_id' => 1
        ]);
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Labuhan Ratu',
            'kabupaten_id' => 1
        ]);
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Langkapura',
            'kabupaten_id' => 1
        ]);
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Panjang',
            'kabupaten_id' => 1
        ]);
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Rajabasa',
            'kabupaten_id' => 1
        ]);
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Sukabumi',
            'kabupaten_id' => 1
        ]);
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Sukarame',
            'kabupaten_id' => 1
        ]);
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Tanjung Senang',
            'kabupaten_id' => 1
        ]);
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Tanjung Karang Barat',
            'kabupaten_id' => 1
        ]);
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Tanjung Karang Timur',
            'kabupaten_id' => 1
        ]);
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Teluk Betung Barat',
            'kabupaten_id' => 1
        ]);
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Teluk Betung Selatan',
            'kabupaten_id' => 1
        ]);
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Teluk Betung Timur',
            'kabupaten_id' => 1
        ]);
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Teluk Betung Utara',
            'kabupaten_id' => 1
        ]);
        DB::table('kecamatans')->insert([
            'nama_kecamatan' => 'Way Halim',
            'kabupaten_id' => 1
        ]);
    }
}
