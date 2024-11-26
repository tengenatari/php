<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
class MainController extends Controller
{

    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $card = new Card();
        return view('main', ['cards' => $card->all()]);
    }
    public function card(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('card');
    }
    public function form(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('form');
    }
    public function create_card(Request $request): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $valid = $request -> validate([
            'title' => 'required|min:5|max:20',
            'description' => 'required|min:5|max:200',
            'image' => 'required|min:5',
            'modal_title' => 'required|min:5|max:20',
            'modal_description' => 'required|min:5|max:200'
        ]);
        $card = new Card();
        $card->title = $request->input('title');
        $card->description = $request->input('description');
        $card->image = $request->input('image');
        $card->modal_title = $request->input('modal_title');
        $card->modal_description = $request->input('modal_description');

        $card->save();
        return redirect('/');
    }
    public function show(Request $request)
    {
        $card = Card::find($request->input('id'));
        $count = Card::count();
        error_log($card->id);
        return response()->json([
            'ajax_response' => true,
            'modal_title' => $card->modal_title,
            'modal_description' => $card->modal_description,
            'count' => $count,
        ]);
    }
}
