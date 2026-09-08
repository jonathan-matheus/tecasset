<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/status', function () {
    return view('status');
})->name('status');

Route::resource('assets', AssetController::class);
