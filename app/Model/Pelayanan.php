<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    //
    protected $with = ['iks', 'order_konsultasi'];
    protected $fillable = ['nama', 'gambar', 'iks_id'];

    public function order_konsultasi()
    {
        return $this->hasMany(Order_konsultasi::class);
    }

    public function iks()
    {
        return $this->belongsTo(Iks::class);
    }
}
