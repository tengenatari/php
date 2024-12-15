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
}
