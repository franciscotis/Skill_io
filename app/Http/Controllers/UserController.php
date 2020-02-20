<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quality;
use App\User;

class UserController extends Controller
{
    //

    public function habilities(){
        $user = User::find(auth()->user()->id);
        $qualities = $user->qualities;
        $all_qualities = Quality::all();
        return view('users.habilities',compact('qualities','all_qualities'));
    }

    public function retirarQualidade($id_qualidade){
        $user = User::find(auth()->user()->id);
        $user->qualities()->detach($id_qualidade);
        return redirect()->back();
    }

    public function qualities(){
        return $this->belongsToMany(Qualities::class);
    }
}
