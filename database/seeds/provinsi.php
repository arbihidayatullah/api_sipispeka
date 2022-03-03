<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class provinsi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('provinsis')->insert([
            'nama_provinsi' => 'Lampung',
        ]);
    }
}
