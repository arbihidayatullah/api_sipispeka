<?php

namespace App\Model;

// use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'nama'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
