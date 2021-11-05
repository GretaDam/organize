<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'home'])->name('homepage');

Route::get('/login', [PageController::class, 'userConnect'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('loginPost');

Route::get('/register', [PageController::class, 'userCreate'])->name('register');

Route::post('/logout', [LoginController::class, 'logout'])->name('logoutPost');

Route::get('/list', [PageController::class, 'listTask'])->middleware(['auth'])->name('list');

Route::get('/add-task', [PageController::class, 'addTask'])->name('addTask');