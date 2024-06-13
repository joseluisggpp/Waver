<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/top100songs', function () {
    return view('top100songs');
})->name('top100songs');

Route::get('/detection', function () {
    return view('detection');
})->name('detection');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/terms-conditions', function () {
    return view('terms-conditions');
})->name('terms-conditions');

Route::get('/cookies-policy', function () {
    return view('cookies-policy');
})->name('cookies-policy');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/cookies-settings', function () {
    return view('cookies-settings');
})->name('cookies-settings');

Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');


Route::controller(CartController::class)->group(function () {
    Route::get('/cart', 'index')->name('cart');
    Route::get('/cart/create', function () {
        return view('testingcart');
    });
    Route::post('/cart/{producto}', 'store');
    Route::put('/cart/{producto}', 'update');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
