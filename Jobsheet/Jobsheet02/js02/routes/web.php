<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello', function () {
//     return 'Hello World!';
// });

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

Route::get('/user/{name?}', function ($name = "John") {
    return ('Nama saya: ' .$name);
});