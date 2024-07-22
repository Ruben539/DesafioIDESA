<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\debtsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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



Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

//TODO: Rutas para el crud de usuarios.
Route::prefix('users')->name('users.')->group(function(){
    Route::get('users', [UserController::class, 'index'])->name('index');
    Route::get('create', [UserController::class, 'create'])->name('create');
    Route::post('store', [UserController::class, 'store'])->name('store');
    Route::get('edit/{user}', [UserController::class, 'edit'])->name('edit');
    Route::put('update/{user}', [UserController::class, 'update'])->name('update');
    Route::get('destroy/{user}', [UserController::class, 'destroy'])->name('destroy');
});

//TODO: Rutas para el crud de authors.
Route::prefix('authors')->name('authors.')->group(function(){
    Route::get('authors', [AuthorController::class, 'index'])->name('index');
    Route::get('create', [AuthorController::class, 'create'])->name('create');
    Route::post('store', [AuthorController::class, 'store'])->name('store');
    Route::get('edit/{author}', [AuthorController::class, 'edit'])->name('edit');
    Route::put('update/{author}', [AuthorController::class, 'update'])->name('update');
    Route::get('destroy/{author}', [AuthorController::class, 'destroy'])->name('destroy');
});


//TODO: Rutas para el crud de books.
Route::prefix('books')->name('books.')->group(function(){
    Route::get('books', [BookController::class, 'index'])->name('index');
    Route::get('create', [BookController::class, 'create'])->name('create');
    Route::post('store', [BookController::class, 'store'])->name('store');
    Route::get('edit/{book}', [BookController::class, 'edit'])->name('edit');
    Route::put('update/{book}', [BookController::class, 'update'])->name('update');
    Route::get('destroy/{book}', [BookController::class, 'destroy'])->name('destroy');
});


//TODO: Ejercicio numero 2 de lotes.
Route::prefix('debts')->name('debts.')->group(function(){
    Route::get('debts', [debtsController::class, 'index'])->name('index');
    Route::get('create', [debtsController::class, 'create'])->name('create');
    Route::get('edit', [debtsController::class, 'edit'])->name('edit');
    Route::post('show', [debtsController::class, 'show'])->name('show');
   
});

Route::get('logout', [UserController::class, 'logout'])->name('include.nav');


Auth::routes();
