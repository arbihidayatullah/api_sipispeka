<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'nama' => 'arbi h',
            'nik' => '181818181818',
            'rw' => '1',
            'rt' => '1',
            'norumah' => '12',
            'nohp' => '0909877878',
            'nowa' => '0810101010',
            'password' => '123456789',
            'status' => false,
            'role_id' => 1,
            'desa_id' => 1
        ]);
    }
}