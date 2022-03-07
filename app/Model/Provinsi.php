<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $fillable = [
        'nama_provinsi'
    ];

    // protected $with = ['kabupaten'];

    public function kabupaten()
    {
        return $this->hasMany(Kabupaten::class);
    }
}