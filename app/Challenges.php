<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challenges extends Model
{
    public function user(){
        return $this->hasMany('App\ChallengeUser','challenge_id');
    }
}
