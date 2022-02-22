<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\RegistereduserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ListController;




Route::POST('/', [WorkController::class, 'create']);
Route::PUT('/', [WorkController::class, 'update']);
Route::POST('/', [WorkController::class, 'create']);
Route::PUT('/', [WorkController::class, 'update']);
Route::GET('/', [WorkController::class, 'read']);

Route::GET('/Register', [RegisteredUserController::class, 'index']);
Route::POST('/Register', [RegisteredUserController::class, 'store']);



Route::GET('/login', [LoginController::class, 'auth']);
Route::POST('/login', [LoginController::class, 'auth']);

Route::GET('/attendance', [ListController::class, 'read']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';




