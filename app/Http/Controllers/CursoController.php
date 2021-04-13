<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        //Metodo para mostrar la pag Principal
        //Para indicar los archivos de una misma carpeta se pone un punto (.) en vez de /
        return view('cursos.index');
    }

    public function create()
    {
        //Metodo para mostar un Formulario para crear un curso
        return view('cursos.create');
    }

    public function show($curso)
    {
        //Metodo para mostrar un elemento en particular
        //Si se quiere mandar una variable a la vista con el mismo nombre se puede usar "compact"
        //compact('curso') == ['curso'=>$curso]
        return view('cursos.show', compact('curso'));
    }
}
