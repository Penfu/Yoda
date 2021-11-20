<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/practices', function () {
    return view('practices');
})->name('practices');

Route::middleware(['guest:' . config('fortify.guard')])->group(function () {
    Route::get('login/github', [LoginController::class, 'github'])->name('login.github');
    Route::get('login/github/callback', [LoginController::class, 'githubCallback']);
});
