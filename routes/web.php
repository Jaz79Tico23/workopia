<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('jobs/saved', function () {
   return view('jobs.saved');
});
Route::resource('jobs', JobController::class);

Route::get('login', function () {
   return view('pages.login');
});

Route::get('register', function () {
   return view('pages.register');
});

Route::get('dashboard', function () {
   return view('pages.dashboard');
});
