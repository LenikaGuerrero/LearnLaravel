<?php

namespace App\Http\Controllers; //Lugar del archivo

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        //__invoke() solo se utiliza cuando se quiere administrar una unica ruta
        return "Bienvenido a la Pagina Principal";
    }
}
