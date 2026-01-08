<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\IndexController;


Route::get('/', function () {
    return view('welcome');
    
});

Route::get('/job',[JobController::class, 'index']);

Route::get('/contact',[IndexController::class, 'Contact']);

Route::get('/about',[IndexController::class, 'about']);
