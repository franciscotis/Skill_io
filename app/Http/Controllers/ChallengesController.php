<?php

namespace App\Http\Controllers;
use App\Challenges;

use App\ChallengeUser;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class ChallengesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $challenges = Challenges::all();
        return view('challenges.index',compact('challenges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('challenges.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $challenge = new Challenges();
        $challenge->name = $request->input('name');
        $challenge->description = $request->input('description');
        $challenge->save();
        return redirect()->route('challenges.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $challenge = Challenges::find($id);
        $challenge_user = ChallengeUser::where('user_id','=',auth()->user()->id)->where('challenge_id','=',$id)->get();
        return view('challenges.show',compact('challenge','challenge_user'));
    }

    public function challengesusers(){
        $challenges = ChallengeUser::paginate(10);
        return view('challenges.showUsers',compact('challenges'));
    }

    public function downloadCode($id){
        $challenge_user = ChallengeUser::find($id);
        $file = public_path()."/storage/".$challenge_user->code_localization;
        return response()->download($file);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $challenge = Challenges::find($id);
        return view('challenges.edit',compact('challenge'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $challenge = Challenges::find($id);
        $challenge->name = $request->input('name');
        $challenge->description = $request->input('description');
        $challenge->save();
        return redirect()->route('challenges.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $challenge = Challenges::find($id);
        $challenge->delete();
        return redirect()->back();
    }

    public function send(Request $request, $id){
        $challenge_user = new ChallengeUser();
        $challenge_user->user_id = auth()->user()->id;
        $challenge_user->challenge_id = $id;
        $path = $request->code->store('codes','public');
        $challenge_user->code_localization = $path;
        $challenge_user->asigned = true;
        $challenge_user->save();
        return redirect()->back();
    }
}
