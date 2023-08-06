<?php
 
use App\Http\Controllers\ChirpController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/menu', function() { return view('menu'); })->name('menu');
Route::resource('posts', PostController::class);

    Route::middleware(['auth'])->group(function() {
        Route::get('/dashboard', [DashController::class, 'index'])->name('dashboard');
        Route::post('/posts/{post}/chirps/send', [ChirpController::class, 'sendMessage'])->name('chirps.send');

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');    
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');     
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy'); 
    });

require __DIR__.'/auth.php';