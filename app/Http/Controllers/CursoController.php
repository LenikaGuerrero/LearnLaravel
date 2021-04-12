<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        //Metodo para mostrar la pag Principal
        return "Bienvenido a la pagina de cursos";
    }

    public function create()
    {
        //Metodo para mostar un Formulario para crear un curso
        return "En esta pagina podras crear un curso";
    }

    public function show($curso)
    {
        //Metodo para mostrar un elemento en particular
        return "Bienvenido al curso $curso";
    }
}
