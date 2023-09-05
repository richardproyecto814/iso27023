<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/register',[RegisterController::class,'show']);
Route::post('/register',[RegisterController::class,'register']);

Route::get('/login',[LoginController::class,'show']);
Route::post('/login',[LoginController::class,'login']);

Route::get('/home',[HomeController::class,'index']);


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

Route::get('/parametros', function () {
    return view('Parámetros27032');

});    
/*

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


Route::get('/identificar6', function () {
    return view('identificar/gestionriesgosuministros');
}); */

Route::get('/menu1', function () {
    return view('/graficasevaluacion');
});
/*

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
*/
Route::get('/proteger8', function () {
    return view('proteger7');
});

Route::get('/recuperar', function () {
    return view('recuperar7');
});

/*
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

Route::get('/detectar8', function () {
    return view('detectar7');
});
*/
Route::get('/responder', function () {
    return view('responder7');
});
/*
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

*/



Route::get('/identificarnuevo', function () {
    return view('identificar7');
});


Route::get('/ayuda', function () {
    return view('ayuda');
});

Route::get('/credenciales', function () {
    return view('credenciales');
});

Route::get('/HOMEISO', function () {
    return view('homeiso');
});

Route::get('/detectar8', function () {
    return view('detectar7');
});
