<?php

use App\Perfil;

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

Route::get('/', function () {
    return view('welcome');
});

// Mostrar Hello World Laravel 5.7 un método get ruta HELLO WORLD
Route::get('/hello',function(){
    return 'Hello World';
});

Route::get('/GET',function(){
    $perfiles = Perfil::get();
    dd($perfiles);
});

Route::get('/FIRST',function(){
    $perfiles = Perfil::first();
    dd($perfiles);
});