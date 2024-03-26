<?php

use App\Http\Controllers\MediaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('media');
});

Route::get('/d', function () {
    return view('detail');
});

Route::get('/t', function () {
    return view('test');
});

Route::get('/dashboard', function () {
    return view('posts/index');
})->middleware(['auth', 'verified'])->name('index');

Route::get('/news-media',[MediaController::class,'news-media'])->name('news-media');

Route::get('/news-csr',[MediaController::class,'news-csr'])->name('news-csr');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
