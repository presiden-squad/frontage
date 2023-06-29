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

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/chart', function () {
    return view('chart', [
        "title" => "Chart"
    ]);
});

Route::get('/form', function () {
    return view('form', [
        "title" => "Forms"
    ]);
});

Route::get('/tab-panel', function () {
    return view('tab-panel', [
        "title" => "Panels"
    ]);
});

Route::get('/table', function () {
    return view('table', [
        "title" => "Tables"
    ]);
});

Route::get('/ui', function () {
    return view('ui', [
        "title" => "UI"
    ]);
});