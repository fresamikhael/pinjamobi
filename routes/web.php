<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RentalController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/car', [CarController::class, 'index'])->name('cars');

Route::get('/rentals', [RentalController::class, 'index'])->name('rentals');
Route::get('/rentals/{id}', [RentalController::class, 'detail'])->name('rental-detail');

Route::get('/faq', [FAQController::class, 'index'])->name('faq');

Route::get('/register', [FAQController::class, 'index'])->name('register');
Route::get('/login', [FAQController::class, 'index'])->name('login');
