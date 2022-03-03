<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order_konsultasi extends Model
{
    //
    protected $with = ['user', 'pelayanan'];
    protected $fillable = ['keluhan', 'user_id', 'pelayanan_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pelayanan()
    {
        return $this->belongsTo(Pelayanan::class);
    }

    public function intervensi()
    {
        return $this->hasMany(Intervensi::class);
    }
}
