<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProblemController;
use App\Http\Controllers\SolutionController;



Route::get('/', function () {
    return view('welcome');
});


Route::prefix('/dashboard')->middleware(['auth'])->group( function(){
    Route::get('/', function () {
        return view('admin.index');
    })->name('dashboard');

    Route::resource('problems', ProblemController::class);
    Route::resource('solutions', SolutionController::class);

});




require __DIR__.'/auth.php';
