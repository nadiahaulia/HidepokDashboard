<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('pages/dashboard');
});

Route::get('/dashboard2', function () {
    return view('pages/dashboard2');
});

Route::get('/dashboard3', function () {
    return view('pages/dashboard3');
});

Route::get('/inputdata', function () {
    return view('pages/inputdata');
});

Route::get('/museum', function () {
    return view('pages/prestasi');
});
Route::get('/data', function () {
    return view('pages/datamuseum');
});
// pagae data-data
Route::get('/blog', function () {
    return view('pages/data/blog');
});

Route::get('/event', function () {
    return view('pages/data/event');
});

Route::get('/RSUD', function () {
    return view('pages/data/rsud');
});

Route::get('/spaceroom', function () {
    return view('pages/data/spaceroom');
});

Route::get('/volunteer', function () {
    return view('pages/data/volunteer');
});
