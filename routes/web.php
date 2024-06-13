<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/Dashboard', function () {
    return view('DashboardPage');
});

Route::get('/Schedule', function () {
    return view('SchedulePage');
});