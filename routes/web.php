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





