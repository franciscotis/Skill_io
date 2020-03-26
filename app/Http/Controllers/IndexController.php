<?php

namespace App\Http\Controllers;

use App\Challenges;
use App\ChallengeUser;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $challenges = Challenges::all();
        return view('welcome',compact('challenges','challenge_user'));

    }

}
