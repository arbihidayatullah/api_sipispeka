<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    //
    protected $with = ['kecamatan'];
    protected $fillable = [
        'nama_desa'
    ];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
