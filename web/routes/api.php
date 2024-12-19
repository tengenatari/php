<?php

use App\Models\Card;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/card/{card:id}', function (Request $request, Card $card) {
    return $card;
});
Route::middleware('auth:api')->get('/comment/{comment:id}', function (Request $request, Comment $comment) {
    return $comment;
});
Route::middleware('auth:api')->post('/card/new', function (Request $request) {
   return $request->user()->cards()->create($request->only(['title', 'description', 'modal_title', 'modal_description', 'image']));
});
Route::middleware('auth:api')->post('/comment/new/{card:id}', function (Request $request, Card $card) {

    $data = $request->only(['text']);

    $data['user_id'] = Auth::id();

    $comment = $card->comments()->create($data);

    $comments = Card::find($card->id)->leftjoin('users', function ($join){
        $join->on('cards.user_id', '=', 'users.id');
    })->leftjoin('friends', function ($join){
        $join->on('cards.user_id', '=', 'friends.friend_id');
        $join->where('friends.user_id', '=', Auth::id());
        $join->whereNull('friends.deleted_at');
    })->join('comments', 'cards.id', 'comments.card_id')->where('comments.id', $comment->id)->get();
    return $comments;
});

Route::middleware('auth:api')->get('/user/', function (Request $request) {
    return $request->user();
});
