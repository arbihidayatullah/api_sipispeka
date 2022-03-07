<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Soal_iks extends Model
{
    // 
    protected $with = ['pelayanan'];
    protected $fillable = ['soal', 'pelayanan_id'];

    public function jawaban_iks()
    {
        return $this->hasMany(Jawaban_iks::class);
    }
    public function pelayanan()
    {
        return $this->belongsTo(Pelayanan::class);
    }
}
