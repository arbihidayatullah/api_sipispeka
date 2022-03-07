<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    //
    protected $with = ['role', 'desa', 'order_konsultasi'];
    protected $fillable = [
        'nama',
        'nik',
        'rt',
        'rw',
        'norumah',
        'nohp',
        'nowa',
        'password',
        'role_id',
        'desa_id',
        'status'

    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function desa()
    {
        return $this->belongsTo(Desa::class);
    }

    public function order_konsultasi()
    {
        return $this->hasMany(Order_konsultasi::class);
    }
}
