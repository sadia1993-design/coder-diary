<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProblemController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\TagController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('dashboard');

    Route::resource('problems', ProblemController::class);
    Route::resource('solutions', SolutionController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('tags', TagController::class);

    Route::post('ajax/tag/store', function (Request $request) {
        return response()->json(['tag' => $request->name]);
    })->name('ajax.tag.store');
});

require __DIR__ . '/auth.php';
