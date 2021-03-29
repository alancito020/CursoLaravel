<?php

use Illuminate\Support\Facades\Route;
//-------para que funcione las funcion de fachada----

//---------------------------------------------------

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
    //return view('welcome');
    return view('vista1',['nombre'=>'Juan']);
});

//-----ejemplo texto------
Route:: get('/texto', function(){
    return 'holi';
});
//------------------

//-----ejemplo2 array------
Route:: get('/arreglo', function(){
    $arreglo = ['lunes', 'martes', 'miercoles'];
    return $arreglo;
});
//------------------

//-----ejemplo3 arreglo asociativo------
Route:: get('/arreglo2', function(){
    $arreglo2 = [
        'Id'=> '1',
        'descripcion'=> 'producto 1'
    ];
    return $arreglo2;
});
//------------------

//-----ejemplo------
Route:: get('/nombre/{nombre}', function($nombre){
    return 'el nombre es: '.$nombre;
});
//------------------

//-----ejemplo------
Route:: get('/cliente/{cliente}', function($cliente='Cliente general'){
    return 'el nombre del cliente es: '.$cliente ;
});
//------------------

//-----ejemplo------
Route:: get('/ruta1', function(){
    return 'esta es la vista de la ruta 1';
})->name('rutaNro1');
//------------------

//-----ejemplo------(se retorna la direccion)
Route:: get('/ruta2', function(){
    //return 'esta es la vista de la ruta2';
    return redirect()->route('rutaNro1');
});
//------------------

//-----ejemplo------(aqui solo valida caracteres numericos)
Route:: get('/usuario/{usuario}', function($usuario){
    return 'el nombre del usuario es: '.$usuario;
})->where('usuario','[0-9]+');
//------------------

//-----ejemplo------(aqui solo valida caracteres alfabeticos)
Route:: get('/usuario/{usuario}', function($usuario){
    return 'el nombre del usuario es: '.$usuario;
})->where('usuario','[A-Za-z]+');
//------------------

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
