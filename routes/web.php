<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pages\HomeController;

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/home', [HomeController::class, 'index'])->name('pages-home');
Route::post('sendData', [HomeController::class, 'sendData']);
