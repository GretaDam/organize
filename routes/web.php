<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

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

Route::get('/register', [UserController::class, 'create'])->name('register');
Route::post('/register', [UserController::class, 'store'])->name('registerPost');

Route::post('/logout', [LoginController::class, 'logout'])->name('logoutPost');

Route::get('/list', [TaskController::class, 'index'])->middleware(['auth'])->name('list');
Route::get('/task/{id}', [TaskController::class, 'show'])->middleware(['auth'])->name('task');

Route::get('/add-task', [TaskController::class, 'create'])->middleware(['auth'])->name('addTask');
Route::post('/add-task', [TaskController::class, 'store'])->middleware(['auth'])->name('addTaskStore');

Route::get('/edit-task/{id}', [TaskController::class, 'edit'])->middleware(['auth'])->name('editTask');
Route::post('/edit-task/{id}', [TaskController::class, 'update'])->middleware(['auth'])->name('editTaskPost');

Route::post('/del-task/{id}', [TaskController::class, 'destroy'])->middleware(['auth'])->name('delTask');