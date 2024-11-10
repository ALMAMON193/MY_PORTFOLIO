<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\Profile\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.layout.index');
});

Route::get('/dashboard', function () {
    return view('backend.layout.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/profile/settings', [ProfileController::class, 'index'])->name('profile.settings.index');
    Route::post('/admin/profile/settings/update/avatar', [ProfileController::class, 'uploadAvatar'])->name('profile.settings.update.avatar');
    Route::post('/admin/profile/settings/update/password', [ProfileController::class, 'UpdatePassword'])->name('profile.settings.update.password');
});

require __DIR__.'/auth.php';
