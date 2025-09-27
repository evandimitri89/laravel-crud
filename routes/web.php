<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/students');
});

Route::name('students.')->prefix('/students')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('index');
    Route::get('/create', [StudentController::class, 'create'])->name('create');
    Route::get('/{student}/edit', [StudentController::class, 'edit'])->name('edit');
});
