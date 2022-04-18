<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProblemController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;



Route::get('/', function () {
    return view('welcome');
});


Route::prefix('/dashboard')->middleware(['auth'])->group( function(){
    Route::get('/', function () {
        return view('admin.index');
    })->name('dashboard');

    Route::resource('problems', ProblemController::class);
    Route::resource('solutions', SolutionController::class);
    Route::resource('products', ProductController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('tags', TagController::class);

});




require __DIR__.'/auth.php';
