<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\SalirController;

//Rutas de vistas login.
Route::get('/', function () {
    return view('login');
});
Route::get('/login', function () {
    return view('login');
});
//Rutas de vistas de registro
Route::get('/registrarse', function () {
    return view('register');
});

//rutas de vistas de perfil
Route::get('/user/perfil', function () {
    return view('perfil.perfil');
});


//operaciones de login
Route::POST('/login_user',[LoginController::class, 'login_user']);


//Operaciones de registro

Route::POST('/registrar_user',[LoginController::class, 'registrar_user']);

//operaciones de perfil
Route::POST('/session_user',[PerfilController::class, 'session_user']);
Route::POST('/envio_archivo',[PerfilController::class, 'envio_archivo']);
Route::POST('/ver_archivo',[PerfilController::class, 'ver_archivo']);
Route::POST('/salida',[SalirController::class, 'salida']);
Route::POST('/user_ingresado',[PerfilController::class, 'user_ingresado']);
