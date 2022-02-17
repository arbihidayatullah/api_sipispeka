<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jawaban_iks extends Model
{
    //
    protected $fillable = [
        'jawaban'
    ];

    public function iks()
    {
        $this->hasOne(Iks::class);
    }
}
