<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quality extends Model
{
    public function users(){
        return $this->belongsToMany('App\User','quality_users')->withPivot('level');;
    }
}
