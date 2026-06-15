<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::middleware(\App\Http\Middleware\SetLanguage::class)->group(function () {
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/products', [PageController::class, 'products'])->name('products');
    Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
    Route::get('/enquiry', [PageController::class, 'enquiry'])->name('enquiry');
    Route::post('/enquiry', [PageController::class, 'storeEnquiry'])->name('enquiry.store');
    Route::post('/set-language', [PageController::class, 'setLanguage'])->name('set-language');
});
