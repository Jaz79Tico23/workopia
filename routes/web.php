<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('welcome');
});

Route::get('/jobs', function () {
	return 'Available Jobs';
})->name('jobs');
