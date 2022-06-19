<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AccountsController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\GameCoinsController;
use App\Http\Controllers\LanguageController;

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

Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('/login', [MainController::class, 'login'])->name('login');
Route::get('/register', [MainController::class, 'register'])->name('register');

Route::get('/accounts', [AccountsController::class, 'index'])->name('accounts');
Route::get('/items', [ItemsController::class, 'index'])->name('items');
Route::get('/game-coins', [GameCoinsController::class, 'index'])->name('gameCoins');

Route::get('/lang/{lang}', [LanguageController::class, 'changeLanguage'])->name('changeLanguage');


