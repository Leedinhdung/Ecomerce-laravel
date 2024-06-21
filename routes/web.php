<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Middleware\AuthenticateMiddleware;
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
    return view('auth.login');
});
// name: dễ dàng tham chiếu tuyến đường này theo tên của nó trong các phần khác của ứng dụng, chẳng hạn như tạo liên kết hoặc chuyển hướng.
Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(AuthenticateMiddleware::class);
Route::get('/', [AuthController::class, 'index'])->name('auth.login');
Route::post('login', [AuthController::class, 'login'])->name('auth.signin');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');

// CATEGORY
Route::get('admin/category', [CategoryController::class, 'index'])->name('cat.list')->middleware(AuthenticateMiddleware::class);
Route::get('admin/category/add', [CategoryController::class, 'create'])->name('cat.create')->middleware(AuthenticateMiddleware::class);;
Route::post('admin/category/create', [CategoryController::class, 'store'])->name('cat.store');

//Products
Route::get('admin/products', [ProductController::class, 'index'])->name('products.list')->middleware(AuthenticateMiddleware::class);
Route::get('admin/products/add', [ProductController::class, 'create'])->name('products.create')->middleware(AuthenticateMiddleware::class);
