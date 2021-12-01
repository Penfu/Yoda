<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PracticesController;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/practices', [PracticesController::class, 'index'])->name('practices');
Route::get('/practices-{domain}', [PracticesController::class, 'byDomain'])->name('practices.domain');

Route::middleware(['guest:' . config('fortify.guard')])->group(function () {
    Route::get('login/github', [LoginController::class, 'github'])->name('login.github');
    Route::get('login/github/callback', [LoginController::class, 'githubCallback']);
});
