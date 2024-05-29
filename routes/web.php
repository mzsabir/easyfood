<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\MenueCOntroller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/abc', function () {
    return view('welcome');
});

Route::get('/item/index', [ItemController::class,'index']);
Route::get('/item/create', [ItemController::class,'create']);
Route::post('/item/add', [ItemController::class,'add']);
Route::get('/item/{id}', [ItemController::class,'destroy']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
