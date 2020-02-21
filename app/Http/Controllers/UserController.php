<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quality;
use App\User;
use App\QualityUser;
class UserController extends Controller
{
    //

    public function habilities(){
        $user = User::find(auth()->user()->id);
        $qualities = $user->qualities;
        $all_qualities = Quality::all();
        $qu = QualityUser::where('user_id','=',auth()->user()->id)->distinct()->get();
        return view('users.habilities',compact('qualities','all_qualities','qu'));
    }

    public function adicionarQualidade(Request $data){
        $user = User::find(auth()->user()->id);
        if ($user->qualities()->where('quality_id', $data->idQq)->count() == 0) {
            $user->qualities()->attach($data->idQq,['level' => $data->level,'validated'=>0]);
        }
        return redirect()->back();
    }

    public function retirarQualidade($id_qualidade){
        $user = User::find(auth()->user()->id);
        $user->qualities()->detach($id_qualidade);
        return redirect()->back();
    }

    public function selectUserPerQuality(){
        $all_qualities = Quality::all();
        return view('company.selectpage',compact('all_qualities'));
    }

    public function selectQualityCompany(Request $data){
        $quality_ids = $data->quality;
        $qtd_quality = count($quality_ids);
        $users = User::all();
        $qualified_users = array();
        $biggest_level = 0;
        $qualified_user = null;
        foreach($users as $user){
            foreach($quality_ids as $qi){
                if(($user->qualities()->where('quality_id','=', $qi))){
                    if(!in_array($user,$qualified_users)){
                        array_push($qualified_users,$user);
                    }
                }
            }
        }

        foreach($qualified_users as $user){
            if(count($user->qualities)>= $qtd_quality ){
            foreach($user->qualities as $q){
                if(intval($q->pivot->level) < 3 or intval($q->pivot->validated)==0){
                    if(in_array($user,$qualified_users)){
                    unset($qualified_users[array_search($user,$qualified_users)]);}
                }
            }
        }else{
            if(in_array($user,$qualified_users)){
                unset($qualified_users[array_search($user,$qualified_users)]);}
            }
        

        }

            foreach($qualified_users as $user){
                foreach($user->qualities as $q){
                    if(intval($q->pivot->level) > $biggest_level){
                        $biggest_level++;
                        $biggest_level = $q->pivot->level;
                        $qualified_user = $user;
                    }
                }
            }
            
            return view('company.userselected',compact('qualified_user')); 

            
        }
           


    public function qualities(){
        return $this->belongsToMany(Qualities::class);
    }
}
