<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jawaban_iks extends Model
{
    //
    protected $with = ['soal_iks'];
    protected $fillable = ['jawaban', 'soal_iks_id', 'iks_id',];

    public function soal_iks()
    {
        return $this->belongsTo(Soal_iks::class);
    }

    public function iks()
    {
        return $this->belongsTo(Iks::class);
    }
}
