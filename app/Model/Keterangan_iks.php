<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Keterangan_iks extends Model
{
    //
    protected $with = ['nilai'];
    protected $fillable = ['keterangan', 'warna', 'nilai_id'];

    public function nilai()
    {
        return $this->belongsTo(Nilai::class);
    }
}
