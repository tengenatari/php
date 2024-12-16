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
            $friends = User::leftjoin('friend', function ($join){

                $join->on('users.id', '=', 'friend.friend_id');
            })->where('friend.user_id', Auth::id());
            $others = User::whereNotIn('id', $friends->select('friend_id'))->get();
            $friends = User::leftjoin('friend', function ($join){

                $join->on('users.id', '=', 'friend.friend_id');
            })->where('friend.user_id', Auth::id())->get();

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

        $friend->user_id=$request->input(Auth::id());
        $friend->friend_id=$request->input('id');
        $friend->save();
        return redirect('/users');
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
