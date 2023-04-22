<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TelegramController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

// Create middleware route to login if not login
Route::middleware(['auth', 'verified'])->group(function () {

//    Route::get('', [HomeController::class, 'index'])->name('home');
//    Route::post('/add', [HomeController::class, 'add'])->name('add');
//    Route::get('/newAddress', [HomeController::class, 'newAddress'])->name('newAddress');
//    Route::post('/saveNewAddress', [HomeController::class, 'saveNewAddress'])->name('saveNewAddress');
//    Route::DELETE('/home/delete/{id}', [HomeController::class, 'delete'])->name('delete');
//    Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('edit');
//    Route::PUT('/update/{id}', [HomeController::class, 'update'])->name('update');
//    Route::get('/report', [HomeController::class, 'report'])->name('report');
//    Route::any('/search', [HomeController::class, 'search'])->name('search');
});
Route::get('/login', [HomeController::class, 'login'])->name('login');

Route::get('', [HomeController::class, 'index'])->name('home');
Route::post('/add', [HomeController::class, 'add'])->name('add');
Route::get('/newAddress', [HomeController::class, 'newAddress'])->name('newAddress');
Route::post('/saveNewAddress', [HomeController::class, 'saveNewAddress'])->name('saveNewAddress');
Route::DELETE('/home/delete/{id}', [HomeController::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('edit');
Route::PUT('/update/{id}', [HomeController::class, 'update'])->name('update');
Route::get('/report', [HomeController::class, 'report'])->name('report');
Route::any('/search', [HomeController::class, 'search'])->name('search');
