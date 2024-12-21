<?php

use App\Http\Controllers\IngatlanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('http://localhost8000/api/ingatlan', [IngatlanController::class, 'index']);
