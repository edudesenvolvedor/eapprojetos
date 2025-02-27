<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/sobre-mim', function () {
    return view('about');
});

Route::get('/perguntas-frequentes', function () {
    return view('faq');
});

Route::get('/solicite-um-orcamento-ja-um-orcamento', function () {
    return view('home');
});

Route::prefix('/blog')->group(function () {
    Route::get('/', function () {
        return view('blog.home');
    });

    Route::get('/{article}', function () {
        return view('blog.articles');
    });
});
