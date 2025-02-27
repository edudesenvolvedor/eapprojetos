<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/solicite-um-orcamento-ja-um-orcamento', function () {
    return view('home');
});
