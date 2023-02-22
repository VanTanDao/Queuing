<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
 });
Route::get('/login', function () {
    return view('index');
});

Route::get('/saimatkhau', function () {
    return view('saimatkhau');
});

Route::get('/datlaimatkhau', function () {
    return view('datlaimatkhau');
});

Route::get('/mknew', function () {
    return view('mkmoi');
});

Route::get('/canhan', function () {
    return view('canhan');
});
Route::get('/trangchu', function () {
    return view('trangchu');
});
