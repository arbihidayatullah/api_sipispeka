<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    //
    // protected $with = ['soal_iks'];
    protected $fillable = ['nama', 'gambar'];

    public function order_konsultasi()
    {
        return $this->hasMany(Order_konsultasi::class);
    }

    public function soal_iks()
    {
        return $this->hasMany(Soal_iks::class);
    }
}
