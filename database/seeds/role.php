<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
            'nama' => 'Admin',
        ]);
        DB::table('roles')->insert([
            'nama' => 'Puskes',
        ]);
        DB::table('roles')->insert([
            'nama' => 'User',
        ]);
    }
}
