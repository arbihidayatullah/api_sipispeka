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
            'deskripsi' => 'kesehatan',
            'gambar' => '',
        ]);
    }
}
