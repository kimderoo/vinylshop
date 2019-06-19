<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'user_id', 'token'
    ];

    public function users()
    {
            return $this->belongsToMany('App\User');
    }
}
