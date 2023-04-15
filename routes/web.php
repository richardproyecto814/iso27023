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

Route::get('/inicio', function () {
    return view('index');
});



Route::get('/', function () {
    return view('login ejemplito');
});

Route::get('/usuarios', function () {
    return view('usuarios/listausuarios');
});

Route::get('/crearusuario', function () {
    return view('usuarios/registrousuario');
});

Route::get('/menu', function () {
    return view('layoutmenu');
});
Route::get('/activos', function () {
    return view('activos/gestiondeactivos');
});
Route::get('/activos1', function () {
    return view('activos/entornoempresarial');
});

Route::get('/activos2', function () {
    return view('activos/gobernanza');
});

Route::get('/activos3', function () {
    return view('activos/evaluacionriesgos');
});

Route::get('/activos4', function () {
    return view('activos/parametrosiso');
});

