<?php

use App\Http\Controllers\PenjualanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('penjualan.index');
});

Route::resource('penjualan', PenjualanController::class);