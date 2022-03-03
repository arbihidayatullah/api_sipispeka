<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class desa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('desas')->insert([
            'nama_desa' => 'madiun',
            'kecamatan_id' => 1
        ]);
    }
}
