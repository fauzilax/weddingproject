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

Route::get('/', function () {
    return view('home', [
        "title" => "Wedding Project"

    ]);
});

Route::get('/souvenirs', function () {
    return view('souvenirs', [
        "title" => "Souvenirs"

    ]);
});

Route::get('/theme/1', function () {
    return view('theme.theme1', [
        'title' => 'theme1'
    ]);
});
