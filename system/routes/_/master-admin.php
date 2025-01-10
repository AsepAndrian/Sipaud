<?php

use App\Http\Controllers\MasterAdmin\DashboardController;
use App\Http\Controllers\MasterAdmin\DataAdmin\AdminController;
use App\Http\Controllers\MasterAdmin\DataSekolah\SekolahController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index']);
Route::resource('data-sekolah', SekolahController::class);
Route::resource('data-admin', AdminController::class);