<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Request_iks extends Model
{
    //
    protected $with = ['user'];
    protected $fillable = ['user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
