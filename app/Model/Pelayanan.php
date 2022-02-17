<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    //
    protected $fillable = [
        'nama', 'gambar', 'iks_id'
    ];

    public function order_pelayanan()
    {
        return $this->hasOne(Order_pelayanan::class);
    }

    public function order_konsultasi()
    {
        return $this->hasOne(Order_konsultasi::class);
    }

    public function iks()
    {
        return $this->belongsTo(Iks::class);
    }
}
