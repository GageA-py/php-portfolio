<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

// Show the subscribe page
Route::get('/subscribe', [SubscriptionController::class, 'showSubscribePage'])->name('subscribe.page')->middleware('auth');

// Handle subscription form submission
Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe')->middleware('auth');

// Show unsubscribe page
Route::get('/unsubscribe', [SubscriptionController::class, 'showUnSubscribePage'])->name('unsubscribe.page')->middleware('auth');

// Handle unsubscribe form submission
Route::post('/unsubscribe', [SubscriptionController::class, 'unsubscribe'])->name('unsubscribe')->middleware('auth');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
