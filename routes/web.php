<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\SuperuserController;
use App\Http\Middleware\EnsureSuperuserExists;

Route::get('/superusuario/criar', [SuperuserController::class, 'create'])->name('superuser.create');

Route::middleware(EnsureSuperuserExists::class)->group(function () {
    Route::get('/status', function () {
        return view('status');
    })->name('status');

    Route::resource('assets', AssetController::class);
});

