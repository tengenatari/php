<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Friend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        $users = User::all();
        if(Auth::check()){
            // $friends = User::find(Auth::id())->friends()->select('friend_id')->get();
            $friends = User::leftjoin('friends', function ($join){

                $join->on('users.id', '=', 'friends.friend_id');
            })->where('friends.user_id', Auth::id())->whereNull('deleted_at');
            $others = User::whereNotIn('id', $friends->select('friend_id'))->where('users.id', '!=', Auth::id())->get();
            $friends = User::leftjoin('friends', function ($join){

                $join->on('users.id', '=', 'friends.friend_id');
            })->where('friends.user_id', Auth::id())->whereNull('deleted_at')->where('users.id', '!=', Auth::id())->get();

        }
        else{
            $friends = [];
            $others = [];
        }

        // error_log($friends->first());

        return view('users', ['others' => $others, 'friends'=>$friends]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create_friend(Request $request)
    {
        $friend = new Friend();

        $friend->user_id=Auth::id();
        $friend->friend_id=$request->input('id');
        $friend->save();

        $friend = new Friend();
        $friend->friend_id=Auth::id();
        $friend->user_id=$request->input('id');
        $friend->save();

        return redirect('/users');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete_friend(Request $request)
    {
        $friend = Friend::where('friends.user_id', '=', Auth::id())->Where('friends.friend_id', '=', $request->input('id'))->first();
        error_log(Auth::id());
        error_log($request->input('id'));
        error_log($friend);

        if ($friend) {$friend->delete();}
        $friend = Friend::where('friend_id','=', Auth::id())->where('user_id','=', $request->input('id'));
        if ($friend) {$friend->delete();}
        return redirect('/users');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
