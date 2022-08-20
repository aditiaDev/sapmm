<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\HomeController;
 
// Route::get('/home', [HomeController::class, 'index']);

Route::get('{any}', function () {
    return view('app');
})->where('any', '.*');


// Route::get('{any}', function () {
//     return view('layout.base');
// })->where('any', '.*');