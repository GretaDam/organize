<?php

use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'home'])->name('homepage');

Route::get('/se-connecter', [PageController::class, 'userConnect'])->name('connectpage');

Route::get('/creation-compte', [PageController::class, 'userCreate'])->name('usercreatepage');