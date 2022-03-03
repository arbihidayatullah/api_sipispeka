<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    //
    protected $fillable = [
        'tanggal_mulai',
        'tanggal_selesai',
        'lokasi',
        'kategori',
        'agenda',
        'keterangan',

    ];
}
