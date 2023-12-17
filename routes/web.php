<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Middleware
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\GuestMiddleware;



Route::get('/', [IndexController::class, 'index'])->name('customer.index')->middleware([GuestMiddleware::class]);
Route::get('/persediaan-obat', [indexController::class, 'accessMedicinePage'])->name('customer.medicinePage')->middleware([GuestMiddleware::class]);


Route::get('/register', [RegisterController::class, 'registerPage'])->name('admin.registerPage')->middleware([AuthMiddleware::class]);
Route::post('/register', [RegisterController::class, 'registerProcess'])->middleware([AuthMiddleware::class]);

Route::get('/login', [LoginController::class, 'loginPage'])->name('admin.loginPage')->middleware([GuestMiddleware::class]);
route::post('/login', [LoginController::class, 'loginProcess'])->middleware([GuestMiddleware::class]);


route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout')->middleware([AuthMiddleware::class]);


route::get('/dashboard', [DashboardController::class, 'getDashboard'])->name('admin.dashboard')->middleware([AuthMiddleware::class]);
