<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Opsi_alamat extends Model
{
    //
    protected $fillable = ['status', 'kecamatan_id'];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }
}
