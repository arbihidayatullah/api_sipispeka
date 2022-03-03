<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Soal_iks extends Model
{
    // 
    protected $fillable = ['soal'];

    public function jawaban_iks()
    {
        return $this->hasMany(Jawaban_iks::class);
    }
}
