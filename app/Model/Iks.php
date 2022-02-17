<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Iks extends Model
{
    //
    protected $fillable = [
        'nilai', 'keterangan_id', 'soal_id', 'jawaban_id', 'users_id'
    ];

    public function pelayanan()
    {
        return $this->hasOne(Pelayanan::class);
    }

    public function jawaban_iks()
    {
        return $this->hasMany(Jawaban_iks::class);
    }

    public function soal_iks()
    {
        return $this->hasMany(Soal_iks::class);
    }

    public function keterangan_iks()
    {
        return $this->hasMany(Keterangan_iks::class);
    }
}
