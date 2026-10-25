<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('guest')->group(function(){

    Route::get('/login', [UserController::class, 'login'])->name('login');
    
    Route::post('/login', [UserController::class, 'authenticate'])->name('login.authenticate');
});


Route::prefix('admin')->group(function(){

    Route::get('/', [MainController::class, 'index'])->name('admin.main.index')->middleware('auth')->middleware('admin');

    Route::resource('/categories', CategoryController::class);
    
});
