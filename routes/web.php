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

// Route for the pages
Route::prefix('pages')->group(function () {

    // 404 Page
    Route::get('/404-pages', function () {
        return view('pages.404-pages');
    })->name('404-pages');

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

    // Route for the accordions
    Route::get('/accordions', function () {
        return view('accordions.index');
    })->name('accordions');

    // Route for the alerts
    Route::get('/alerts', function () {
        return view('alerts.index');
    })->name('alerts');

    // Route for the animations
    Route::get('/animations', function () {
        return view('animations.index');
    })->name('animations');

    // Route for the avatars
    Route::get('/avatars', function () {
        return view('avatars.index');
    })->name('avatars');

    // Route for the badges
    Route::get('/badges', function () {
        return view('badges.index');
    })->name('badges');

    // Route for the breadcrumbs
    Route::get('/breadcrumbs', function () {
        return view('breadcrumbs.index');
    })->name('breadcrumbs');

    // Route for the buttons
    Route::get('/buttons', function () {
        return view('buttons.index');
    })->name('buttons');

    // Route for the cards
    Route::get('/cards', function () {
        return view('cards.index');
    })->name('cards');

    // Route for the carousels
    Route::get('/carousels', function () {
        return view('carousels.index');
    })->name('carousels');

    // Route for the dialogs
    Route::get('/dialogs', function () {
        return view('dialogs.index');
    })->name('dialogs');

    // Route for the dropdowns
    Route::get('/dropdowns', function () {
        return view('dropdowns.index');
    })->name('dropdowns');

    // Route for the forms
    Route::get('/forms', function () {
        return view('forms.index');
    })->name('forms');

    // Route for the icons
    Route::get('/icons', function () {
        return view('icons.index');
    })->name('icons');

    // Route for the lists
    Route::get('/lists', function () {
        return view('lists.index');
    })->name('lists');

    // Route for the modals
    Route::get('/modals', function () {
        return view('modals.index');
    })->name('modals');

    // Route for the notifications
    Route::get('/notifications', function () {
        return view('notifications.index');
    })->name('notifications');

    // Route for the pagination
    Route::get('/pagination', function () {
        return view('pagination.index');
    })->name('pagination');

    // Route for the progress bars
    Route::get('/progress-bars', function () {
        return view('progress-bars.index');
    })->name('progress-bars');

    // Route for the sidebars
    Route::get('/sidebars', function () {
        return view('sidebars.index');
    })->name('sidebars');

    // Route for the sliders
    Route::get('/sliders', function () {
        return view('sliders.index');
    })->name('sliders');

    // Route for the tables
    Route::get('/tables', function () {
        return view('tables.index');
    })->name('tables');

    // Route for the tabs
    Route::get('/tabs', function () {
        return view('tabs.index');
    })->name('tabs');

    // Route for the tooltips
    Route::get('/tooltips', function () {
        return view('tooltips.index');
    })->name('tooltips');
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

    Route::get('/authentications', function () {
        return view('neumorphism.authentications');
    })->name('neumorphism.authentications');

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
});
