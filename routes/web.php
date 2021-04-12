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

Route::get('/', function () {
    return view('welcome');
});

//Definir una nueva Ruta
Route::get('cursos', function () {
    return "Bienvenido a la pagina de cursos";
});

//Ruta para formulario
Route::get('cursos/create', function () {
    return "En esta pagina podras crear un curso";
});

//Rutas por URL / Variables
//Este tipo de rutas tiene que ir preferentemente al final para que no conflictue con las demas rutas

// Route::get('cursos/{curso}', function ($curso) {
//     return "Bienvenido al curso $curso";
// });

//Rutas con mas de una variable
//Para hacer opcional una variable se asigna el signo: "?" despues del mismo e inicializar la variable
Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if ($categoria) {
        return "Bienvenido al curso $curso, de la categoria $categoria";
    } else {
        return "En esta pagina podras crear un curso";
    }
});
