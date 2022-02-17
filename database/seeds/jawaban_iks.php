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
        ]);
        DB::table('jawaban_iks')->insert([
            'jawaban' => 'Tidak',
        ]);
        DB::table('jawaban_iks')->insert([
            'jawaban' => 'Netral',
        ]);
    }
}
