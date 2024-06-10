<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book-page', function () {
    return view('pages.book');
})->name('book-page');