<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    //
    protected $fillable = [
        'tanggal', 'kategori', 'judul', 'keterangan'
    ];
}
