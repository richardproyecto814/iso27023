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



Route::get('/dash', function () {
    return view('login');
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
Route::get('/identificar', function () {
    return view('identificar/gestiondeactivos');
});
Route::get('/identificar1', function () {
    return view('identificar/entornoempresarial');
});

Route::get('/identificar2', function () {
    return view('identificar/gobernanza');
});

Route::get('/identificar3', function () {
    return view('identificar/evaluacionriesgos');
});

Route::get('/identificar4', function () {
    return view('identificar/parametrosiso');
});
Route::get('/identificar5', function () {
    return view('identificar/gestiondelriesgo');
});

Route::get('/menu1', function () {
    return view('/graficasevaluacion');
});

Route::get('/identificar6', function () {
    return view('identificar/gestionriesgosuministros');
});

Route::get('/proteger', function () {
    return view('proteger/gestionidentidad');
});

Route::get('/proteger2', function () {
    return view('proteger/capacitacion');
});

Route::get('/proteger3', function () {
    return view('proteger/seguridaddatos');
});

Route::get('/proteger4', function () {
    return view('proteger/procesosproteccion');
});

Route::get('/proteger5', function () {
    return view('proteger/mantenimiento');
});

Route::get('/proteger6', function () {
    return view('proteger/tecnologiaproteccion');
});

Route::get('/recuperar', function () {
    return view('recuperar/recuperacion');
});

Route::get('/recuperar2', function () {
    return view('recuperar/mejorar');
});

Route::get('/recuperar3', function () {
    return view('recuperar/comunicaciones');
});

Route::get('/detectar', function () {
    return view('detectar/anomaliaseventos');
});

Route::get('/detectar2', function () {
    return view('detectar/monitoreoseguridad');
});

Route::get('/detectar3', function () {
    return view('detectar/procesosdetenccion');
});

Route::get('/responder', function () {
    return view('responder/planificacion');
});

Route::get('/responder2', function () {
    return view('responder/comunicacion');
});

Route::get('/responder3', function () {
    return view('responder/analisis');
});

Route::get('/responder4', function () {
    return view('responder/mitigacion');
});

Route::get('/responder5', function () {
    return view('responder/mejoras');
});

