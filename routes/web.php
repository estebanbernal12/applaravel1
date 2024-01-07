<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('vista1',['nombre'=>'Esteban']);
});



 Route::get('/texto',function(){
    return "<h1>App Laravel 1</h1>";
 });
 Route::get('/arreglo',function(){

    $arreglo=['id'=>'1','descripcion'=>'producto 1'];
    return $arreglo;
 });

 Route::get('/cliente/{cliente?}',function($cliente='cliente NN'){
  
    return'<h1>El Cliente es: '.$cliente.'</h1>';
 });

 Route::get('/ruta1',function(){
   return '<h1>Route 1</h1>';
 })->name('rutaNro1');

 Route::get('/ruta2',function(){
   return redirect()->route('rutaNro1');
 });

 Route::get('/usuario/{usuario}',function($usuario){
   return '<h1>User: '.$usuario.'</h1>';
 })->where('usuario','[0-9]+');
