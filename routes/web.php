<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::prefix('/dashboard')->middleware(['auth'])->group( function(){
    Route::get('/', function () {
        return view('admin.index');
    })->name('dashboard');

});




require __DIR__.'/auth.php';
