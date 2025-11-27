<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// how to route in Laravel
Route::get('/jobs', function () {
    return 'Available jobs will be listed here.';
})->name('jobs');

// for any making any kind of request
Route::any('/submit', function () {
    return 'Available jobs will be listed here.';
});

// another waay to genearte a redirect link to a route
Route::get('/test', function () {
    $url = route('jobs');
    return '<a href="' . $url . '">click me</a>';
});

//returning json response
Route::get('/data', function () {
    return [
        'name' => 'John Doe',
        'email' => 'ify@301.com'
    ];
});
