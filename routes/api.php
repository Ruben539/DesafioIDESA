<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware(['auth:api'])->group(function () {
    //TODO: Rutas para el crud de authors.
    Route::prefix('authors')->name('authors.')->group(function () {
        Route::get('authors', [AuthorController::class, 'index'])->name('index');
        Route::get('create', [AuthorController::class, 'create'])->name('create');
        Route::post('store', [AuthorController::class, 'store'])->name('store');
        Route::get('edit/{author}', [AuthorController::class, 'edit'])->name('edit');
        Route::put('update/{author}', [AuthorController::class, 'update'])->name('update');
        Route::get('destroy/{author}', [AuthorController::class, 'destroy'])->name('destroy');
    });


    //TODO: Rutas para el crud de books.
    Route::prefix('books')->name('books.')->group(function () {
        Route::get('books', [BookController::class, 'index'])->name('index');
        Route::get('create', [BookController::class, 'create'])->name('create');
        Route::post('store', [BookController::class, 'store'])->name('store');
        Route::get('edit/{book}', [BookController::class, 'edit'])->name('edit');
        Route::put('update/{book}', [BookController::class, 'update'])->name('update');
        Route::get('destroy/{book}', [BookController::class, 'destroy'])->name('destroy');
    });
});
