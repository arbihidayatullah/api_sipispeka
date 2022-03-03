<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    //
    protected $with = ['iks'];
    protected $fillable = ['nilai_iks', 'iks_id'];

    public function keterangan_iks()
    {
        return $this->hasMany(Keterangan_iks::class);
    }

    public function iks()
    {
        return $this->belongsTo(Iks::class);
    }
}
