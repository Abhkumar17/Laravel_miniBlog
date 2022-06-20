<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'home'])->name('home');

Route::middleware(['auth'])->group(function (){
    Route::get('/dashboard',[DashboardController::class,'showPost'])->name('dashboard');
    Route::get('/post',[PostController::class,'index'])->name('post.index');
    Route::post('/post',[PostController::class,'create'])->name('post.create');
    Route::get('/post/edit/{id}',[PostController::class,'edit'])->name('post.edit');
    Route::post('/post/edit/{id}',[PostController::class,'update'])->name('post.update');
    Route::get('/post/delete/{id}',[PostController::class,'destroy'])->name('post.delete');
});
require __DIR__.'/auth.php';
