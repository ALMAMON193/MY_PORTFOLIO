<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Frontend\HomeController;



Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio/details/{id}', [HomeController::class, 'portfolioDetails'])->name('portfolio.details');

Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/contact', action: [HomeController::class, 'contact'])->name('contact');
Route::post('/contact/store', [HomeController::class, 'store'])->name('contact.store');