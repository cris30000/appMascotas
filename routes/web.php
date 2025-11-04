<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//este es una prueba de conexion entre ramas
route::get('/inicio', function () {
    return view('inicio');
});