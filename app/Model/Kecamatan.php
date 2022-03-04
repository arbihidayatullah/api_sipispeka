<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    //
    protected $with = ['kabupaten'];
    protected $fillable = [
        'nama_kecamatan',
        'kabupaten_id'
    ];

    public function desa()
    {
        return $this->hasMany(Desa::class);
    }
    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class);
    }
}
