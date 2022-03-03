<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nilai extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('nilais')->insert([
            'nilai_iks' => 10,
            'iks_id' => 1,
        ]);
    }
}
