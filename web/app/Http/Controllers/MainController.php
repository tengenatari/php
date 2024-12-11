<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;
use Illuminate\Support\Facades\Auth;


class MainController extends Controller
{

    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $card = new Card();
        return view('main', ['cards' => $card->all()]);
    }

    public function create(Request $request)
    {
        error_log($request);
        $valid = $request -> validate([
            'title' => 'required|min:5|max:20',
            'description' => 'required|min:5|max:200',
            'image' => 'required',
            'modal_title' => 'required|min:5|max:20',
            'modal_description' => 'required|min:5|max:200'
        ]);
        error_log($request);
        $card = new Card();
        $card->title = $request->input('title');
        $card->description = $request->input('description');
        $card->modal_title = $request->input('modal_title');
        $card->modal_description = $request->input('modal_description');
        $path = $request->File('image')->store('public/cat_images');
        $card->image = Storage::url($path);
        $card->user_id = Auth::id();

        $manager = new ImageManager(new Driver());
        $image = $manager->read(file_get_contents($request->File('image')));
        $image->resize(300, 200);
        $image->save("../storage/app/".$path);

        $card->save();
        return view('template' , ['card' => $card]);
    }
    public function show(Request $request)
    {
        $card = Card::find($request->input('id'));
        $count = Card::count();
        error_log($card->id);
        return response()->json([
            'ajax_response' => true,
            'title' => $card->title,
            'description' => $card->description,
            'modal_title' => $card->modal_title,
            'modal_description' => $card->modal_description,
            'image' => $card->image,
            'count' => $count,
        ]);
    }
    public function delete(Request $request){
        error_log($request);
        error_log($request->input("id"));
        $card = Card::find($request->input('id'));
        error_log($card->id);
        $card->delete();

        return response()->json([
            "ajax_response" => true,
            "success" => true
        ]);
    }
    public function update(Request $request){

        $valid = $request -> validate([
            'title' => 'required|min:5|max:20',
            'description' => 'required|min:5|max:200',
            'image' => 'required',
            'modal_title' => 'required|min:5|max:20',
            'modal_description' => 'required|min:5|max:200'
        ]);

        $card = Card::find($request->input('id'));
        $card->title = $request->input('title');
        $card->description = $request->input('description');
        $card->image = $request->input('image');
        $card->modal_title = $request->input('modal_title');
        $card->modal_description = $request->input('modal_description');
        $card->save();

        return response()->json([
            "ajax_response" => true,
            "success" => true
        ]);
    }

}
