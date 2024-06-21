<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScheduleController;
use App\Models\Schedule;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Login');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');