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



Route::get('/index', function () {
    return view ("index");
 });

 Route::get('/productos', function () {
    return view ("Productos");
 });

 Route::get('/producto', function () {
    return view ("Producto");
 });

 Route::get('/ayuda', function () {
    return view ("ayuda");
 });

 Route::get('/carrito', function () {
    return view ("carrito");
 });

 Route::get('/login', function () {
    return view ("login");
 });

 Route::get('/miperfil', function () {
   return view ("miperfil");
});

Route::get('/quienessomos', function () {
   return view ("quienessomos");
});

Route::get('/productos', "productoscontroller@lsitado" );

Route::get('/productos/{id}', "productoscontroller@detalle");

 Route::get('/registrarse', function () {
    return "Registrarse";
});
Route::post('/registracion', function () {
    return "Bienvenido";
});


// este codigo sirve para cada producto individual pero le falta algo 
Route::get('/producto/{id}', function ($id) {
    $vac = compact("id");
    return view ("producto", $vac);
});