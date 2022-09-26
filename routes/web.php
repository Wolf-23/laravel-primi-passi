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
    $hello = 'Hello World';
    $firstLaravel = 'Questo è il mio primo codice in Laravel';
    return view('home', [
        'helloView' => $hello,
        'laravelView' => $firstLaravel
    ]);
})->name('home');


Route::get('/secondpage', function() {
    $secondText = 'Questa è la mia seconda pagina!';
    $secondParagh = 'Questo è il paragrafo della seconda pagina!';
    return view('secondPage', [
        'secondView' => $secondText,
        'secondParagh' => $secondParagh
    ]);
})->name('second');

Route::get('/thirdpage', function() {
    $thirdText = 'Questa è la mia terza pagina!';
    return view('thirdPage', [
        'thirdView' => $thirdText
    ]);
})->name('third');