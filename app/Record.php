<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    //
    protected $fillable = [
        'name', 'photo_id'
    ];

    public function role(){
        return $this->belongsTo('App\Genre');
    }

    public function photo(){
        return $this->belongsTo('App\Photo');
        }


}
