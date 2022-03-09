<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Intervensi extends Model
{
    //
    protected $with = ['order_konsultasi'];
    protected $fillable = ['intervensi', 'keterangan', 'order_konsultasi_id'];

    public function order_konsultasi()
    {
        return $this->belongsTo(Order_konsultasi::class);
    }
}