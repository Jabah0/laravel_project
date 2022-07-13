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
    return view('welcome');
});

Route::view('Test', "Test",[
    'page_name' => 'About',
    'page_description' => "This is About page"
]);

Route::view('nav','navbar');
Route::view('home','home');
Route::view('login','login');
