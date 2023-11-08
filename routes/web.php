<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\MessagesController;


//*** Esta es una forma de mostrar las rutas***
//Route::get('/', function () {
//    $nombre = "Leonardo";
    /*return view('home', ['nombre'=>$nombre]);*/
    /*return view('home')->with('nombre', $nombre);*/
//    return view('home', compact('nombre'));  
//})->name('home');

//***Esta es una forma mas simple*** se utiliza para vistas que no tienen mucha lógica
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
//Route::view('/portfolio', 'portfolio', compact('portfolio'))->name('portfolio');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::post('/contact',  [MessagesController::class, 'store'])->name('contact');
