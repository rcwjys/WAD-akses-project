<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\subClassController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

// * Middleware
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\GuestMiddleware;


// * Customer Page
Route::get('/', [IndexController::class, 'index'])->name('customer.index')->middleware([GuestMiddleware::class]);

Route::get('/persediaan-obat', [indexController::class, 'accessMedicinePage'])->name('customer.medicinePage')->middleware([GuestMiddleware::class]);

Route::get('/login', [LoginController::class, 'loginPage'])->name('admin.loginPage')->middleware([GuestMiddleware::class]);

route::post('/login', [LoginController::class, 'loginProcess'])->middleware([GuestMiddleware::class]);

route::post('/messages/create', [MessageController::class, 'store'])->name('message.create');


// * Routing For Admin
route::get('/dashboard', [DashboardController::class, 'getDashboard'])->name('admin.dashboard')->middleware([AuthMiddleware::class]);

route::get('/medicine-sub-class', [SubClassController::class, 'subclassPage'])->name('admin.medicine-sub-class')->middleware([AuthMiddleware::class]);

route::get('/medicine-sub-class/create', [subClassController::class, 'getFormForSubClass'])->name('admin.create-form')->middleware([AuthMiddleware::class]);

route::post('/medicine-sub-class/create', [subClassController::class, 'submitFormForSubClass'])->name('admin.submit-form')->middleware([AuthMiddleware::class]);

route::get('/medicine-sub-class/detail/{subTherapyClassId}', [subClassController::class, 'getDetailSubClass'])->name('admin.detail-subclass')->middleware([AuthMiddleware::class]);

route::get('/medicine-sub-class/delete/{subTherapyClassId}', [subClassController::class, 'deleteSubClass'])->name('admin.delete-sub-class')->middleware([AuthMiddleware::class]);

route::get('/medicine-sub-class/detail/edit/{subTherapyClassId}', [subClassController::class, 'getEditorm'])->name('admin.edit-form')->middleware([AuthMiddleware::class]);

route::put('/medicine-sub-class/detail/edit', [subClassController::class, 'submitEdiFormSubClass'])->middleware([AuthMiddleware::class]);

route::get('/messages', [MessageController::class, 'index']);

route::get('/messages/{messageId}', [MessageController::class, 'showDetail'])->name('message-detail');

route::get('/messages/delete/{messagheId}', [MessageController::class, 'deleteMessage']);


// * Authentication 
Route::get('/register', [RegisterController::class, 'registerPage'])->name('admin.registerPage')->middleware([AuthMiddleware::class]);

Route::post('/register', [RegisterController::class, 'registerProcess'])->middleware([AuthMiddleware::class]);

route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout')->middleware([AuthMiddleware::class]);
