<?php

use Illuminate\Support\Facades\Route;
use illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

// how to route in Laravel
Route::get('/jobs', function () {
    return 'Available jobs will be listed here.';
})->name('jobs');

//getting what request method was used
Route::get('/test', function (Request $request) {
    return [
        'method' => $request->method(),
        'url' => $request->url(),
        'path' => $request->path(),
        'ip' => $request->ip(),
        'full' => $request->fullUrl(),
        'headers' => $request->headers->all(),
    ];
});

//query parameters
Route::get('/users', function (Request $request) {
   return $request->has('name');
});