<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Landing Page
Route::get('/', function () {
    return view('index');
})->name('home');

// About Us section
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/about/our-team', function () {
    return view('about-us.our-team');
})->name('our-team');

// Projects Section
Route::get('/projects', function () {
    return view('projects.index');
})->name('projects-home');

Route::get('/projects/dreams-cdc', function () {
    return view('projects.dreams');
})->name('projects-dreams');

Route::get('/projects/zingane-ovc', function () {
    return view('projects.ovc');
})->name('projects-ovc');

Route::get('/projects/cp-unicef', function () {
    return view('projects.cp');
})->name('projects-cp');

Route::get('/projects/siyakha', function () {
    return view('projects.siyakha');
})->name('projects-siyakha');

// Resouces Section


// Partners Section
Route::get('/partner-with-us', function () {
    return view('partnership');
})->name('partnership');

// Contact Page
Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');
