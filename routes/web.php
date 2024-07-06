<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';


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

    // Order Confirmation Page
    Route::get('/order-confirmation', function () {
        return view('pages.order-confirmation');
    })->name('order-confirmation');
});

// Route for the auth pages
Route::prefix('auth')->group(function () {

    Route::get('/login-signup', function () {
        return view('auth.login-signup');
    })->name('auth.login-signup');
});


// Route for the cards
Route::get('/cards', function () {
    return view('cards.index');
})->name('cards');

// Route for the buttons
Route::get('/buttons', function () {
    return view('buttons.index');
})->name('buttons');

// Route for the neumorphism
Route::prefix('neumorphism')->group(function () {

    Route::get('/', function () {
        return view('neumorphism.index');
    })->name('neumorphism');

    Route::get('/shadows', function () {
        return view('neumorphism.shadows');
    })->name('neumorphism.shadows');
});
