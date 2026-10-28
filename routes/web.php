<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelanaController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [KelanaController::class, 'home']);
Route::get('/tentang', [KelanaController::class, 'tentang']);
Route::get('/destinasi', [KelanaController::class, 'destinasi']);
Route::get('/blog', [KelanaController::class, 'blog']);
Route::get('/blog/{news}', [KelanaController::class, 'blogShow'])->name('blog.show');