<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    // protected $with = ['user'];
    protected $fillable = ['role_name'];
    // protected $table = 'roles';

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
