<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\Profile\ProfileController;
use App\Http\Controllers\Web\Backend\Project\ProjectController;

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

//drill all route
Route::middleware(['auth'])->prefix('admin/project')->name('admin.project.')->group(function () {
    Route::get('/', [ProjectController::class, 'index'])->name('index');
    Route::get('/create', [ProjectController::class, 'create'])->name('create');
    Route::post('/store', [ProjectController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [ProjectController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [ProjectController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [ProjectController::class, 'destroy'])->name('destroy');
    Route::patch('/status/{id}', [ProjectController::class, 'status'])->name('status');
});

require __DIR__.'/auth.php';
