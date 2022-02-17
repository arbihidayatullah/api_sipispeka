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
            'desa' => 'rajabasa',
            'rw' => '1',
            'rt' => '1',
            'norumah' => '12',
            'nohp' => '0909877878',
            'password' => '123456789',
            'roles_id' => '1'
        ]);
    }
}
