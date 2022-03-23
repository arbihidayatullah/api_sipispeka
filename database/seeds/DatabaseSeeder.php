<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(role::class);
        // $this->call(provinsi::class);
        // $this->call(kabupaten::class);
        // $this->call(kecamatan::class);
        // $this->call(desa::class);
        $this->call(user::class);
        $this->call(iks::class);
        $this->call(pelayanan::class);
        $this->call(soal_iks::class);
        $this->call(jawaban_iks::class);
        $this->call(nilai::class);
        $this->call(keterangan_iks::class);
        $this->call(iklan::class);
    }
}
