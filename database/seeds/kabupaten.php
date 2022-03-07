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
            'provinsi_id' => 1
        ]);
        DB::table('kabupatens')->insert([
            'nama_kabupaten' => 'Lampung Selatan',
            'provinsi_id' => 1
        ]);
        DB::table('kabupatens')->insert([
            'nama_kabupaten' => 'Lampung Tengah',
            'provinsi_id' => 1
        ]);
        DB::table('kabupatens')->insert([
            'nama_kabupaten' => 'Lampung Timur',
            'provinsi_id' => 1
        ]);
        DB::table('kabupatens')->insert([
            'nama_kabupaten' => 'Lampung Utara',
            'provinsi_id' => 1
        ]);
        DB::table('kabupatens')->insert([
            'nama_kabupaten' => 'Mesuji',
            'provinsi_id' => 1
        ]);
        DB::table('kabupatens')->insert([
            'nama_kabupaten' => 'Metro',
            'provinsi_id' => 1
        ]);
        DB::table('kabupatens')->insert([
            'nama_kabupaten' => 'Pesawaran',
            'provinsi_id' => 1
        ]);
        DB::table('kabupatens')->insert([
            'nama_kabupaten' => 'Pesisir Barat',
            'provinsi_id' => 1
        ]);
        DB::table('kabupatens')->insert([
            'nama_kabupaten' => 'Pringsewu',
            'provinsi_id' => 1
        ]);
        DB::table('kabupatens')->insert([
            'nama_kabupaten' => 'Tanggamus',
            'provinsi_id' => 1
        ]);
        DB::table('kabupatens')->insert([
            'nama_kabupaten' => 'Tulang Bawang',
            'provinsi_id' => 1
        ]);
        DB::table('kabupatens')->insert([
            'nama_kabupaten' => 'Tulang Bawang Barat',
            'provinsi_id' => 1
        ]);
        DB::table('kabupatens')->insert([
            'nama_kabupaten' => 'Way Kanan',
            'provinsi_id' => 1
        ]);
    }
}
