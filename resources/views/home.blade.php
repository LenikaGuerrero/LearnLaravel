<!--------- DIRECTIVAS ---------->
<!-- Para heredar la plantilla:-->
<!-- 'extends' se enfoca en la carpeta de views -->
@extends('layouts.plantilla')

<!-- Para llenar el contenido de yield: -->
@section('title','Home')

<!-- Para escribir mas de una simple cadena: -->
@section('content')
<h1>Bienvenido a la Pagina Principal</h1>
@endsection


<!-- PHP NO ENTIENDE DE DIRECTIVAS, POR LO QUE SE LE TIENE QUE CAMBIAR EL NOMBRE A .BLADE PARA QUE PUEDA HEREDAR -->