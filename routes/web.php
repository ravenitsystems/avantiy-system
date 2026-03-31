<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard/{vue_capture?}', function () {
    return view('vue-application');
})->where('vue_capture', '[\/\w\.-]*');
