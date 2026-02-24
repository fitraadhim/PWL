<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/photos', PhotoController::class);

Route::resource('/photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('/photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

Route::get('/articles/{id}', [PageController::class,'articles']);

Route::get('/about', [PageController::class,'about']);

Route::get('/selamat', [PageController::class,'hello']);

Route::get('/hello', [WelcomeController::class,'hello']);

// Route::get('/hello', [App\Http\Controllers\WelcomeController::class,'hello']); 

// Route::get('/hello', 'App\Http\Controllers\WelcomeController@hello');

// Route::get('/world', function () {
//     return "World!";
// });

// Route::get('/selamat', function () {
//     return "Selamat Datang";
// });

// Route::get('/about', function () {
//     return "Nama Saya Adalah Muhammad Fitra Adhim Nurrochman, NIM saya 244107020089";
// });

// Route::get('/user/{name}', function ($name) {
//     return ('Nama saya ' .$name);
// });

// Route::get('/posts/{post}/{comments}/{comment}', function ($postId, $commentId) {
//     return ('Pos ke-' .$postId . "Komentar ke- ".$commentId);
// });

// Route::get('/articles/{id}', function ($id) {
//     return ('Halaman dengan ID Artikel: ' .$id);
// });

// Route::get('/user/{name?}', function ($name = null) {
//     return ('Nama saya: ' .$name);
// });

// Route::get('/user/{name?}', function ($name = "John") {
//     return ('Nama saya: ' .$name);
// });