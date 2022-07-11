<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // Relazione many to many

    public function posts(){
        return $this->belongsToMany('App\Post');
    }

}
