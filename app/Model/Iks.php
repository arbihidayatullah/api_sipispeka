<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Iks extends Model
{
    //
    protected $with = ['user', 'jawaban_iks'];
    // protected $with = ['user', 'jawaban_iks', 'nilai', 'pelayanan'];
    protected $fillable = ['user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jawaban_iks()
    {
        return $this->hasMany(Jawaban_iks::class);
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }

    public function pelayanan()
    {
        return $this->hasMany(Pelayanan::class);
    }
}
