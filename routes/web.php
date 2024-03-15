<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/bs4',[\App\Http\Controllers\PostController::class,'bs4'])->name('bs4');
Route::get('/main',[ \App\Http\Controllers\PostController::class,'main'])->name('main');

Route::resource('posts',\App\Http\Controllers\PostController::class);
Route::resource('newposts',\App\Http\Controllers\NewPostController::class);
