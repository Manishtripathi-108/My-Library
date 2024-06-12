<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('pages')->group(function () {

    // Page with Book
    Route::get('/book-page', function () {
        return view('pages.book');
    })->name('book-page');

    // Background as Building Pure css
    Route::get('/background-building', function () {
        return view('pages.bg-building');
    })->name('background-building');

    // Background as Sunrise
    Route::get('/background-sunrise', function () {
        return view('pages.bg-sunrise');
    })->name('background-sunrise');

});

// Route for the auth pages
Route::prefix('auth')->group(function () {

    Route::get('/login-signup-single', function () {
        return view('auth.login-signup-single');
    })->name('page-1');

});