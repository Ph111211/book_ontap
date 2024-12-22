<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', [BookController::class, 'index']) -> name('index');
// tao csdl
Route::get('/create', [BookController::class, 'create']) -> name('create');
Route::post('/store', [BookController::class, 'store']) -> name('store');

Route::delete('/delete/{id}', [BookController::class, 'destroy']) -> name('destroy');

Route::get('/edit/{id}', [BookController::class, 'edit']) -> name('edit');
Route::post('/update/{id}', [BookController::class, 'update']) -> name('update');



