<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('/practices')->group(function () {
    Route::get('', [PracticeController::class, 'all'])->name('practices');
    Route::get('/moderation', [PracticeController::class, 'moderation'])->name('practices.moderation')->can('moderate');
    Route::get('/domain/{domain:slug}', [PracticeController::class, 'byDomain'])->name('practices.byDomain');
    Route::get('/{practice}', [PracticeController::class, 'index'])->name('practice')->can('view', 'practice');
});

Route::get('/references', [ReferenceController::class, 'index'])->name('references');

Route::get('profil/{user:name}', [ProfileController::class, 'index'])->name('profile');

Route::middleware(['guest:' . config('fortify.guard')])->group(function () {
    Route::get('login/github', [LoginController::class, 'github'])->name('login.github');
    Route::get('login/github/callback', [LoginController::class, 'githubCallback']);
});

require __DIR__ . '/auth.php';
