<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('tasks.index');
});

Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/taske', [TaskController::class, 'store'])->name('tasks.store');
Route::post('/tasks/{id}/delete',[TaskController::class,'destroy'])->name('tasks.destroy');


