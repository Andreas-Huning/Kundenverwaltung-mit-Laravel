<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KundenController;
use App\Http\Controllers\KontaktController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('base');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/kunden', [KundenController::class, 'index'])->name('kunden_index');
    Route::get('/kontakt-art', [KontaktController::class, 'index'])->name('kontakt_art');
    Route::post('/kontakt-art-persist', [KontaktController::class, 'persist'])->name('kontakt_art_persist');
    Route::get('/kunden-anlegen', [KundenController::class, 'create'])->name('kunden_anlegen');
    Route::post('/kunden-persist', [KundenController::class, 'persist'])->name('kunden_persist');
});

require __DIR__.'/auth.php';
