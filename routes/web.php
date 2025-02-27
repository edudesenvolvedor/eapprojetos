<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/sobre-mim', function () {
    return view('about');
});

Route::get('/solicite-um-orcamento-ja-um-orcamento', function () {
    return view('home');
});
