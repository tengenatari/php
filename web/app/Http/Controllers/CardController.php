<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class CardController extends Controller
{
    public function show(User $user){
        if(Gate::check('restore-card')){
            $card = $user->cards()->withTrashed()->get();
        }
        else{
            $card = $user->cards()->get();
        }
        return view('main' , ['cards' => $card]);
    }
    public function news(Request $request){
        if(Auth::check()){
            $card = User::find(Auth::id())->join('friends', 'users.id', '=', 'friends.user_id')->join('cards', 'friends.friend_id', '=', 'cards.user_id')->
            whereNull('cards.deleted_at')->whereNull('friends.deleted_at')->get() ;

            return view('main' , ['cards' => $card]);
        }
        return response('Unauthorized',401);
    }
}
