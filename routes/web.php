<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;


Route::get('/', function () {
    // return view('welcome');
    return 'Hello, World!';
});

Route::get('/job',[JobController::class, 'index']);
