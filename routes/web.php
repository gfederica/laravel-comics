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
    // importo il file comics.php per avere accesso all'array
    $comics = config("comics");
    return view('home', 
    // passo l'array nel return, salvandolo con una variabile che posso utilizzare in blade
    [
        "comicsArray" => $comics
    ]
);
});
