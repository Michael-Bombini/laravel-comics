<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

    $comics = config("comics");

    return view('home' , compact("comics"));
});


Route::get('/the-characters', function () {



    return view('characters');
})->name("characters");


Route::get('/the-comics', function () {



    return view('comics');
})->name("comics");



Route::get('/the-movies', function () {



    return view('movies');
})->name("movies");


Route::get('/dc-tv', function () {



    return view('tv');
})->name("tv");


Route::get('/dc-games', function () {



    return view('games');
})->name("games");


Route::get('/the-collectibles', function () {



    return view('collectibles');
})->name("collectibles");


Route::get('/the-videos', function () {



    return view('videos');
})->name("videos");

Route::get('/our-fans', function () {



    return view('fans');
})->name("fans");


Route::get('/dc-news', function () {



    return view('news');
})->name("news");


Route::get('/the-shop', function () {



    return view('shop');
})->name("shop");







Route::get('/comic/{id}', function ($id) {

    $comics = config("comics");

    $comicResult = null;

    foreach($comics as $comic){
        if($comic["id"] === intval($id))
            $comicResult = $comic;
    }

    if (is_null($comicResult)){
        abort("404");
   }
    
    
    return view('show' , $comicResult);
});





