<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    //
    protected $fillable = [
        'name', 'artist', 'label', 'description', 'price',  'genre_id', 'photo_id', 
    ];

    public function genre(){
        return $this->belongsTo('App\Genre');
    }

    public function photo(){
        return $this->belongsTo('App\Photo');
        }

}
