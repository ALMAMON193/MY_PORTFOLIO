<?php

use App\Http\Controllers\Web\Backend\EducationalQualificationController;
use App\Http\Controllers\Web\Backend\MySkillController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\Profile\ProfileController;
use App\Http\Controllers\Web\Backend\Project\ProjectController;
use App\Http\Controllers\Web\Backend\PersonalInformationController;
use App\Http\Controllers\Web\Backend\WorkingExperienceController;

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
Route::middleware(['guest'])->prefix('admin/project')->name('admin.project.')->group(function () {
    Route::get('/', [ProjectController::class, 'index'])->name('index');
    Route::get('/create', [ProjectController::class, 'create'])->name('create');
    Route::post('/store', [ProjectController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [ProjectController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [ProjectController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [ProjectController::class, 'destroy'])->name('destroy');
    Route::patch('/status/{id}', [ProjectController::class, 'status'])->name('status');
});

//drill all route
Route::middleware(['guest'])->prefix('admin/personal-info')->name('admin.personal.info.')->group(function () {
    Route::get('/create', [PersonalInformationController::class, 'create'])->name('create');
    Route::post('/store', [PersonalInformationController::class, 'store'])->name('store');
    Route::patch('/status/{id}', [PersonalInformationController::class, 'status'])->name('status');
});

//drill all route
Route::middleware(['guest'])->prefix('admin/working-experience')->name('admin.working.experience.')->group(function () {
    Route::get('/', [WorkingExperienceController::class, 'index'])->name('index');
    Route::get('/create', [WorkingExperienceController::class, 'create'])->name('create');
    Route::post('/store', [WorkingExperienceController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [WorkingExperienceController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [WorkingExperienceController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [WorkingExperienceController::class, 'destroy'])->name('destroy');
    Route::patch('/status/{id}', [WorkingExperienceController::class, 'status'])->name('status');
});

Route::middleware(['guest'])->prefix('admin/educational/qualification')->name('admin.educational.qualification.')->group(function () {
    Route::get('/', [EducationalQualificationController::class, 'index'])->name('index');
    Route::get('/create', [EducationalQualificationController::class, 'create'])->name('create');
    Route::post('/store', [EducationalQualificationController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [EducationalQualificationController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [EducationalQualificationController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [EducationalQualificationController::class, 'destroy'])->name('destroy');
    Route::patch('/status/{id}', [EducationalQualificationController::class, 'status'])->name('status');
});

Route::middleware(['guest'])->prefix('admin/my-skill')->name('admin.my.skill.')->group(function () {
    Route::get('/', [MySkillController::class, 'index'])->name('index');
    Route::get('/create', [MySkillController::class, 'create'])->name('create');
    Route::post('/store', [MySkillController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [MySkillController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [MySkillController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [MySkillController::class, 'destroy'])->name('destroy');
    Route::patch('/status/{id}', [MySkillController::class, 'status'])->name('status');
});


require __DIR__ . '/auth.php';
