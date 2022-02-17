<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Soal_iks extends Model
{
    //
    protected $fillable = [
        'soal'
    ];

    public function iks()
    {
        return $this->hasOne(Iks::class);
    }
}
