<?php

use App\Http\Controllers\Web\Backend\Project\ProjectController;
use Illuminate\Support\Facades\Route;


//group route in Project 

Route::controller(ProjectController::class)->prefix('admin/project')->name('admin.project.')->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('create', 'create')->name('create');
    Route::post('store', 'store')->name('store');
    Route::get('{id}/edit', 'edit')->name('edit');
    Route::put('{id}/update', 'update')->name('update');
    Route::delete('{id}/delete', 'destroy')->name('destroy');
});
