<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('welcome');
});

Route::get('jobs', function () {
	$title = 'Jobs Available';
	$jobs = ['Web Developer', 'Systems Analyst', 'Database Specialist', 'Software Engineer'];

	return view('jobs.index', compact(['title', 'jobs']));
})->name('jobs');

Route::get('jobs/create', function () {
	return view('jobs.create');
});
