<?php

use App\Http\Controllers\NavController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });


Route::get('/', [NavController::class, 'home']);
Route::get('/about', [NavController::class, 'about']);
Route::get('/contact', [NavController::class, 'contact']);


// API test

Route::get('/getData', [APIController::class, ('getUser')]);
