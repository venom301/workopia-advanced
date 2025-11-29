<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

// using one line to define resourceful routes for JobController
Route::resource('jobs', JobController::class);
