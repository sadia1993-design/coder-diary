<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProblemController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\TagController;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//GOOGLE LOGIN
Route::get('login/google', [AuthenticatedSessionController::class, 'redirectToGoogle'])->name('google.login');
Route::get('login/google/callback', [AuthenticatedSessionController::class, 'handleGoogleCallback']);
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
        try {
            $tag = Tag::create([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'user_id' => auth()->user()->id,
            ]);

            return response()->json(['tag' => $tag, 'success' => 'Tag Created Successfully']);
        } catch (\Exception$e) {
            return response()->json(['error' => $e->getMessage()]);
        }

    })->name('ajax.tag.store');
});

require __DIR__ . '/auth.php';
