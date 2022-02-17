<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Keterangan_iks extends Model
{
    //
    protected $fillable = [
        'indeks', 'warna'
    ];
    public function iks()
    {
        return $this->belongsTo(Iks::class);
    }
}
