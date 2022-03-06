<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class kabupaten extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kabupatens')->insert([
            'nama_kabupaten' => 'Bandar Lampung',
            'provinsi_id' => 1
        ]);
        DB::table('kabupatens')->insert([
            'nama_kabupaten' => 'Lampung Barat',
            'provinsi_id' => 2
        ]);
        DB::table('kabupatens')->insert([
            'nama_kabupaten' => 'Lampung Selatan',
            'provinsi_id' => 3
        ]);
        DB::table('kabupatens')->insert([
            'nama_kabupaten' => 'Lampung Tengah',
            'provinsi_id' => 4
        ]);
        DB::table('kabupatens')->insert([
            'nama_kabupaten' => 'Lampung Timur',
            'provinsi_id' => 5
        ]);
        DB::table('kabupatens')->insert([
            'nama_kabupaten' => 'Lampung Utara',
            'provinsi_id' => 6
        ]);
        DB::table('kabupatens')->insert([
            'nama_kabupaten' => 'Mesuji',
            'provinsi_id' => 7
        ]);
        DB::table('kabupatens')->insert([
            'nama_kabupaten' => 'Metro',
            'provinsi_id' => 8
        ]);
        DB::table('kabupatens')->insert([
            'nama_kabupaten' => 'Pesawaran',
            'provinsi_id' => 9
        ]);
        DB::table('kabupatens')->insert([
            'nama_kabupaten' => 'Pesisir Barat',
            'provinsi_id' => 10
        ]);
        DB::table('kabupatens')->insert([
            'nama_kabupaten' => 'Pringsewu',
            'provinsi_id' => 11
        ]);
        DB::table('kabupatens')->insert([
            'nama_kabupaten' => 'Tanggamus',
            'provinsi_id' => 12
        ]);
        DB::table('kabupatens')->insert([
            'nama_kabupaten' => 'Tulang Bawang',
            'provinsi_id' => 13
        ]);
        DB::table('kabupatens')->insert([
            'nama_kabupaten' => 'Tulang Bawang Barat',
            'provinsi_id' => 14
        ]);
        DB::table('kabupatens')->insert([
            'nama_kabupaten' => 'Way Kanan',
            'provinsi_id' => 15
        ]);
    }
}
