<?php

use App\Models\Article;
use App\Models\Genre;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GenreController;

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

Route::get('/home', function () {
    return view('pages.home',[
        "title" => "Home"
    ]);
});

Route::get('/create', [ArticleController::Class,'create']);

Route::get('/characters', function(){
    return view('pages.characters',[
        "title" => "Characters",
        "name" => "Eris Greyrat",
        "img" => "Eris.png"
    ]);
});

//halaman multiple articles
Route::get('/articles', [ArticleController::Class,'index']);
//halaman single article
Route::get('/articles/{article:slug}', [ArticleController::Class,'show']);

//halaman multiple genres
Route::get('/genres', [GenreController::Class,'index']);
//halaman single genre
Route::get('/genres/{genre:slug}', [GenreController::Class,'show']);

Route::get('/articles/{id}/delete', [ArticleController::Class,'delete']);

Route::get('/articles/{id}/edit', [ArticleController::Class,'edit']);

Route::post('/articles/{id}/update', [ArticleController::Class,'update']);

Route::resource('/articles', ArticleController::class);