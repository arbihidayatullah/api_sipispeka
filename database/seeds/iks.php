<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class iks extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('iks')->insert([
            'nilai' => '12',
            'soal_id' => '1',
            'jawaban_id' => '1',
            'users_id' => '1',
            'keterangan_id' => '1'

        ]);
    }
}
