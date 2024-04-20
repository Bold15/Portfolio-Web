<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::group(['middleware'=>'auth'], function(){
    Route::get('/comment', function(){
        return view('comment');
    });


});

Route::get('/login', function(){
    return view('login');
})->name('login');

Route::get('/signin', function () {
    return view('signin');
});

Route::post('/authenticate',[LoginController::class, 'authenticate']);

Route::post('/signin', [LoginController::class, 'registration']);

Route::get('/logout',[LoginController::class , 'logout']);

Route::resource('/comment', CommentController::class)->middleware('auth');

Route::post('/postcomment',[CommentController::class, 'store']);

Route::get('comment', [CommentController::class, 'show']);

Route::delete('/comment/{id}', [CommentController::class, 'destroy'])->name('comment.destroy');

Route::get('/comment/{id}/edit', [CommentController::class, 'edit']);

Route::put('/comment/{comment}', [CommentController::class, 'update'])->name('comment.update');
