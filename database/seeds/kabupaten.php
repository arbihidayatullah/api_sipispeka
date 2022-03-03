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
    }
}
