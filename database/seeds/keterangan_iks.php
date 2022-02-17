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
            'indeks' => 'Sehat',
            'warna' => 'Hijau'
        ]);
        DB::table('keterangan_iks')->insert([
            'indeks' => 'Pra-Sehat',
            'warna' => 'Kuning'
        ]);
        DB::table('keterangan_iks')->insert([
            'indeks' => 'Tidak Sehat',
            'warna' => 'Merah'
        ]);
    }
}
