<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book-page', function () {
    return view('pages.book');
})->name('book-page');

Route::get('/background-building', function () {
    return view('pages.bg-building');
})->name('background-building');