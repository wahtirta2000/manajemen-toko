<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/create-user', [UserController::class, 'create'])->name('create-user');
Route::post('/simpan-user', [UserController::class, 'store'])->name('simpan-user');
Route::get('/edit-user/{id}', [UserController::class, 'edit'])->name('edit-user');
Route::post('/update-user/{id}', [UserController::class, 'update'])->name('update-user');
Route::get('/delete-user/{id}', [UserController::class, 'destroy'])->name('delete-user');

