<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JokeController;

Route::get('/joke', [JokeController::class, 'getJoke']);
Route::get('/jokes/{number}', [JokeController::class, 'getJokes']);
Route::get('/joke/{category}', [JokeController::class, 'getJokeByCategory']);
Route::get('/jokes/{category}/{number}', [JokeController::class, 'getJokesByCategory']);


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

// Route for the Components
Route::prefix('components')->group(function () {

    // Route for the cards
    Route::get('/cards', function () {
        return view('cards.index');
    })->name('cards');

    // Route for the buttons
    Route::get('/buttons', function () {
        return view('buttons.index');
    })->name('buttons');
});

// Route for the neumorphism components
Route::prefix('neumorphism')->group(function () {

    Route::get('/', function () {
        return view('neumorphism.index');
    })->name('neumorphism');

    Route::get('/accordions', function () {
        return view('neumorphism.accordions');
    })->name('neumorphism.accordions');

    Route::get('/alerts', function () {
        return view('neumorphism.alerts');
    })->name('neumorphism.alerts');

    Route::get('/badges', function () {
        return view('neumorphism.badges');
    })->name('neumorphism.badges');

    Route::get('/cards', function () {
        return view('neumorphism.cards');
    })->name('neumorphism.cards');

    Route::get('/carousels', function () {
        return view('neumorphism.carousels');
    })->name('neumorphism.carousels');

    Route::get('/breadcrumbs', function () {
        return view('neumorphism.breadcrumbs');
    })->name('neumorphism.breadcrumbs');

    Route::get('/buttons', function () {
        return view('neumorphism.buttons');
    })->name('neumorphism.buttons');

    Route::get('/clock', function () {
        return view('neumorphism.clock');
    })->name('neumorphism.clock');

    Route::get('/e-commerce', function () {
        return view('neumorphism.e-commerce');
    })->name('neumorphism.e-commerce');

    Route::get('/forms', function () {
        return view('neumorphism.forms');
    })->name('neumorphism.forms');

    Route::get('/icons', function () {
        return view('neumorphism.icons');
    })->name('neumorphism.icons');

    Route::get('/modals', function () {
        return view('neumorphism.modals');
    })->name('neumorphism.modals');

    Route::get('/navbars', function () {
        return view('neumorphism.navbars');
    })->name('neumorphism.navbars');

    Route::get('/pagination', function () {
        return view('neumorphism.pagination');
    })->name('neumorphism.pagination');

    Route::get('/popovers', function () {
        return view('neumorphism.popovers');
    })->name('neumorphism.popovers');

    Route::get('/shadows', function () {
        return view('neumorphism.shadows');
    })->name('neumorphism.shadows');

    Route::get('/tables', function () {
        return view('neumorphism.tables');
    })->name('neumorphism.tables');

    Route::get('/tabs', function () {
        return view('neumorphism.tabs');
    })->name('neumorphism.tabs');

    Route::get('/toasts', function () {
        return view('neumorphism.toasts');
    })->name('neumorphism.toasts');

    Route::get('/timelines', function () {
        return view('neumorphism.timelines');
    })->name('neumorphism.timelines');

    Route::get('/tooltips', function () {
        return view('neumorphism.tooltips');
    })->name('neumorphism.tooltips');
});
