<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name("index");

Route::get('map', function () {
    return view('map');
})->name("map");