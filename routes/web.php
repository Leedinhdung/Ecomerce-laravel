<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
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
Route::post('login', [AuthController::class, 'login'])->name('signin');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('admin/category', [CategoryController::class, 'index'])->name('cat.list')->middleware(AuthenticateMiddleware::class);
