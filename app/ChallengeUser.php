<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChallengeUser extends Model
{
    public function challenges(){
        return $this->belongsTo('App\Challenges','challenge_id');
    }

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
