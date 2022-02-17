<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order_pelayanan extends Model
{
    //
    protected $fillable = [
        'keluhan', 'users_id', 'pelayanans_id'
    ];

    public function user()
    {
        return $this->hasOne(Users::class);
    }

    public function pelayanan()
    {
        return $this->hasOne(Pelayanan::class);
    }
}
