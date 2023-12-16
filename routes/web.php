<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('customer.index');
Route::get('/persediaan-obat', [indexController::class, 'accessMedicinePage'])->name('customer.medicinePage');

Route::get('/login', [LoginController::class, 'loginPage'])->name('admin.loginPage');
