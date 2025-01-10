<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DataBerita\DataBeritaController;
use App\Http\Controllers\Admin\DataGuru\DataGuruController;
use App\Http\Controllers\Admin\DataSiswa\DataSiswaController;
use Illuminate\Support\Facades\Route;


route::get('/',[DashboardController::class,'index']);

route::resource('data-berita',DataBeritaController::class);
route::resource('siswa',DataSiswaController::class);
// route::resource('guru',DataGuruController::class);

Route::controller(DataGuruController::class)->group(function () {
    Route::get('/data-guru', 'index');
});
