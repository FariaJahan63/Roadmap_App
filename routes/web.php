<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Roadmap\RoadmapController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Auth\CustomLoginController; 

/*
Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');
*/
Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('dashboard', [HomeController::class, 'home'])->name('dashboard');
    Route::get('/roadmap/{id}/view', [RoadmapController::class, 'show'])->name('roadmap.show');
    Route::get('/logout', [CustomLoginController::class, 'logout'])->name('logout');
});

/*Route::get('dashboard', function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
})->middleware(['auth', 'verified'])->name('dashboard');*/



require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
