<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;



/**
 * Fake login to test middleware CheckAdmin
 */
// Auth::loginUsingId(164);

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
    return view('welcome');
});

// // 1. Write all the routes with routes name
// Route::get('/users', [UserController::class, 'index']);
// Route::get('/users/create', [UserController::class, 'create'])
//     ->name('users.create')
//     ->middleware([
//         'admin'
//     ]);
// Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
// Route::get('/users/{user}', [UserController::class, 'show'])
//     ->name('users.show')
//     ->middleware([
//         'admin'
//     ]);
// Route::post('/users/', [UserController::class, 'store'])->name('users.store');
// Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
// Route::delete('/users/{user}', [UserController::class, 'delete'])->name('users.delete');


// 2. Use resource routes (resource or resources keyword)

Route::resource('/users', UserController::class)
    ->middleware([
        'admin',
    ]);
Route::resource('/projects', ProjectController::class)
    ->middleware([
        'admin',
    ]);
