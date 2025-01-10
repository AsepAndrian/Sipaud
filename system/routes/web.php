<?php

use App\View\Components\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataGuruController;

Route::prefix('master-admin')->group(function(){
    include "_/master-admin.php";
});

Route::prefix('admin')->group(function(){
    include "_/admin.php";
});

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'LoginProses']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('/admin-add', [AuthController::class, 'test']);
Route::get('/master-admin-add', [AuthController::class, 'test_master']);

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('/tentang', function () {
    return view('dashboard.tentang');
});

Route::get('/layanan', function () {
    return view('dashboard.layanan');
});

Route::get('/kontak', function () {
    return view('dashboard.kontak');
});

// Route::resource('admin/guru', DataGuruController::class);