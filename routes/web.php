<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

Route::get('/', HomeController::class);

// Route::get('/', function () {
//     // return view('welcome');
//     return "Bienvenido a la Pagina Principal";
// });

//Nueva Ruta
//Para definir el metodo de la ruta, se pone en un array y el nombre del metodo que va administrar la ruta
Route::get('cursos', [CursoController::class, 'index']); //Version 8
// Route::get('cursos', 'CursoController'); //Version Inferior 

//Ruta para formulario
Route::get('cursos/create', [CursoController::class, 'create']); //Version 8
// Route::get('cursos', 'CursoController@create'); //Version Inferior

//Rutas por URL / Variables
//Este tipo de rutas tiene que ir preferentemente al final para que no conflictue con las demas rutas
Route::get('cursos/{curso}', [CursoController::class, 'show']);

//Rutas con mas de una variable
//Para hacer opcional una variable se asigna el signo: "?" despues del mismo e inicializar la variable
// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
//     if ($categoria) {
//         return "Bienvenido al curso $curso, de la categoria $categoria";
//     } else {
//         return "En esta pagina podras crear un curso";
//     }
// });
