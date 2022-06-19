<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/accounts', [AccountsController::class, 'index'])->name('accounts');
Route::get('/items', [ItemsController::class, 'index'])->name('items');
Route::get('/game-coins', [GameCoinsController::class, 'index'])->name('gameCoins');

Route::get('/lang/{lang}', [LanguageController::class, 'changeLanguage'])->name('changeLanguage');

Auth::routes();


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
