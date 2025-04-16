<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
}) -> name('home');


Route::get('/header', function () {
    return view('header');
}) -> name('header');


Route::get('/menu', function () {
    return view('menu');
}) -> name('menu');