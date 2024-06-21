<?php

use App\Http\Controllers\Admin\CatalogueController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\CheckAdminMiddleware;
use Illuminate\Support\Facades\Auth;
use \App\Http\Controllers\Auth\RegisterController;

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

//USER
//Auth::routes();
//login
Route::get('auth/login', [LoginController::class, 'ShowLoginForm'])->name('login');
Route::post('auth/login', [LoginController::class, 'login']);
Route::get('auth/logout', [LoginController::class, 'logout'])->name('logout');
//Register
Route::get('auth/register', [RegisterController::class, 'ShowRegisterForm'])->name('register');
Route::post('auth/register', [RegisterController::class, 'register']);


Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(CheckAdminMiddleware::class);

// CATEGORY


//Products
Route::get('admin/products', [ProductController::class, 'index'])->name('products.list');
Route::get('admin/products/add', [ProductController::class, 'create'])->name('products.create');
