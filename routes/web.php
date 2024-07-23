<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form',[ProductController::class, 'index'])->name('form');
Route::post('/add',[ProductController::class, 'store'])->name('add');
Route::get('/show',[ProductController::class, 'show'])->name('show');
Route::get('/delete/{id}',[ProductController::class, 'destroy'])->name('delete');
Route::get('/edit/{id}',[ProductController::class, 'edit'])->name('edit');
Route::post('/update/{id}',[ProductController::class, 'update'])->name('update');
