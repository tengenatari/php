<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', [MainController::class, 'index']);

Route::post('/create', [MainController::class, 'create']);

Route::get('/show', [MainController::class, 'show']);

Route::post('/update', [MainController::class, 'update']);

Route::post('/delete', [MainController::class, 'delete']);

Route::get('/card/{user:name}', [CardController::class, 'show']);

Route::post('/create/comment', [CommentController::class, 'create']);

Route::post('/friend', [UserController::class, 'create_friend']);

Route::get('/comment/{card:id}', [CommentController::class, 'index']);

Route::get('/users', [UserController::class, 'index']);

Route::post('unfriend', [UserController::class, 'delete_friend']);

Route::get('/news', [CardController::class, 'news']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/clients', function (Request $request) {

    return view('clients', [
        'clients' => $request->user()->join("oauth_clients", "oauth_clients.user_id", "users.id",)->where('users.id', Auth::id())->get()
    ]);
})->middleware(['auth'])->name('dashboard.clients');

require __DIR__.'/auth.php';
