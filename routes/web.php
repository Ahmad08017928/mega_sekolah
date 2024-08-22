<?php

use App\Http\Controllers\GaleriController;
use App\Http\Controllers\BeritaController; 
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/galeri', GaleriController::class); 
Route::resource('/berita', BeritaController::class); 

// Route::get('/')