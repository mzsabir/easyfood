<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MenueCOntroller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin;


Route::get('/', [HomeController::class,'home'])->name('home');

Route::get('/abc', function () {
    return view('welcome');
});

Route::get('/item/index', [ItemController::class,'index']);

Route::get('/item/create', function(){
    return view('items.create');
})->middleware('auth','admin');

Route::post('/item/add', [ItemController::class,'add']);
Route::get('/item/{id}', [ItemController::class,'destroy']);

ROute::get('/user-logout',function(){
    Auth::guard('web')->logout();
    return redirect('/');
});

Route::get('/dashboard', function () {
    return view('home');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
