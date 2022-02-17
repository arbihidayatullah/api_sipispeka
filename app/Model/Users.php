<?php

namespace App\Model;

// use App\User;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\HasOne;

class Users extends Model
{

    protected $fillable = [
        'nama', 'nik', 'desa', 'rt', 'rw', 'norumah', 'nohp', 'password', 'role_id'
    ];


    public function order_pelayanan()
    {
        return $this->hasMany(Order_pelayanan::class);
    }

    public function order_konsultasi()
    {
        return $this->hasMany(Order_konsultasi::class);
    }

    public function role()
    {
        return $this->hasOne(Role::class);
    }
}
