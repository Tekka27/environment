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

Route::get('login', function () {
    return view('welcome');
})->name('login');


Route::get('register', function () {
    return view('welcome');
})->name('register');

use Illuminate\Support\Facades\Redis;

Route::get('/store', function() {
    Redis::set('foo', 'bar');
});

Route::get('/retrieve', function() {
    return Redis::get('foo');
});