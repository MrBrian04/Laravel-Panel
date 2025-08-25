<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/app', function () {
//     return view('plantilla.app');
// });

// Route::get('/app', function () {
//     return view('usuario.index');
// });

// Route::get('/action', function () {
//     return view('usuario.action');
// });


route::resource('usuario', UserController::class);