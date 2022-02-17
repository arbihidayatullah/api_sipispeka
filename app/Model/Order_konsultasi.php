<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Order_konsultasi extends Model
{
    //
    protected $fillable = [
        'keluhan', 'users_id', 'pelayanans_id'
    ];

    public function user()
    {
        return $this->belongsTo(Users::class);
    }

    public function pelayanan()
    {
        return $this->belongsTo(Pelayanan::class);
    }
}
