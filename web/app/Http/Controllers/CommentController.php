<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Card;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function index(Card  $card)
    {

        $comments = Comment::leftjoin('users', function ($join){
            $join->on('comments.user_id', '=', 'users.id');
        })->leftjoin('friends', function ($join){
            $join->on('comments.user_id', '=', 'friends.friend_id');
            $join->where('friends.user_id', '=', Auth::id());
            $join->whereNull('friends.deleted_at');
        });

        return view('comments', ["card" => $card, "comments" => $comments->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {
        $comment = new Comment();
        $comment->card_id = $request->input('id');
        $comment->user_id = Auth::id();
        $comment->text = $request->input('text');
        $comment->save();
        return redirect()->back();

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
