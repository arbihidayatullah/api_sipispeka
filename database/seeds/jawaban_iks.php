<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class jawaban_iks extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('jawaban_iks')->insert([
            'jawaban' => 'Ya',
            'soal_iks_id' => 1,
            'iks_id' => 1,
            // 'pelayanan_id' => 1

        ]);
        DB::table('jawaban_iks')->insert([
            'jawaban' => 'Tidak',
            'soal_iks_id' => 1,
            'iks_id' => 1,
            // 'pelayanan_id' => 1

        ]);
        DB::table('jawaban_iks')->insert([
            'jawaban' => 'Netral',
            'soal_iks_id' => 1,
            'iks_id' => 1,
            // 'pelayanan_id' => 1

        ]);
    }
}
