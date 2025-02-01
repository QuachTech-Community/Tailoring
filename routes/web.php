<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [WebController::class, 'dashboard']);

