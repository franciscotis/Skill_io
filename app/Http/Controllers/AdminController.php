<?php

namespace App\Http\Controllers;

use App\Challenges;
use App\ChallengeUser;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function getUsersPerMonth(Request $request){
        if($request->ajax()){
            $data = array();
            for($i=1;$i<=12;$i++){
                $theCount = User::whereMonth('created_at','=',$i)->count();
                array_push($data,$theCount);
            }
            echo json_encode($data);
        }
    }

    public function getChallengesPerMonth(Request $request){
        if($request->ajax()){
            $data = array();
            for($i=1;$i<=12;$i++){
                $theCount = Challenges::whereMonth('created_at','=',$i)->count();
                array_push($data,$theCount);
            }
            echo json_encode($data);
        }
    }

    public function getChallengesUsersPerMonth(Request $request){
        if($request->ajax()){
            $data = array();
            for($i=1;$i<=12;$i++){
                $theCount = ChallengeUser::whereMonth('created_at','=',$i)->count();
                array_push($data,$theCount);
            }
            echo json_encode($data);
        }
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.edit',compact('user'));
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
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->admin = $request->input('admin') ? 1 : 0;
        $user->company = $request->input('company') ? 1 : 0;
        $user->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
}
