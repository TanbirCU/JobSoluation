<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/job', [JobController::class, 'job'])->name('job');



// admin
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/Company', [DashboardController::class, 'Company'])->name('Company');
Route::get('/job', [DashboardController::class, 'job'])->name('job');
Route::get('/employ', [DashboardController::class, 'employ'])->name('employ');
