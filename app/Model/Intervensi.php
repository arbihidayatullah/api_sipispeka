<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Intervensi extends Model
{
    //
    protected $fillable = [
        'intervensi', 'keterangan', 'order_konsultasis_id', 'order_pelayanans_id'
    ];

    public function order_pelayanan()
    {
        return $this->hasOne(Order_pelayanan::class);
    }

    public function order_konsultasi()
    {
        return $this->hasOne(Order_konsultasi::class);
    }
}
