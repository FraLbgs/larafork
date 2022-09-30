<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DashboardController;

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



Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [CustomerController::class, 'index'])->name('home');
Route::post('/addcustomer', [CustomerController::class, 'store'])->name('addcustomer');
Route::post('/addservice', [ServiceController::class, 'store'])->name('addserv');
Route::post('/addproject', [ProjectController::class, 'store'])->name('addproj');
// Route::get('/dashboard/list', [ServiceController::class, 'index'])->name('list');
