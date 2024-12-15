<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\User;
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
    public function restore(Request $request){
        if (Gate::check('restore-card')) {
            error_log($request->input('id'));
            $card = Card::withTrashed()->find((int)$request->input('id'));
            error_log($card);
            $card->restore();
        }
        return redirect('/');
    }
}
