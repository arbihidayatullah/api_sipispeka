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
            'user_id' => 1,
        ]);
    }
}
