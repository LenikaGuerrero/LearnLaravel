<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //Crea la tabla
    {
        //nombre de la tabla, funcion que crea las columna de las tablas
        Schema::create('users', function (Blueprint $table) {
            $table->id(); //Integer Unsigned Increment
            $table->string('name'); //varchar(para indicar otra longitud se pone una coma ',' y el valor)
            // $table->text('nombre'); //Almacena mas de 255 caracteres
            $table->string('email')->unique(); //Debe ser unico
            $table->timestamp('email_verified_at')->nullable(); //Guarda fechas al verificar correos - nullable pasa la propiedad de vacio (NULL)
            $table->string('password'); //varchar
            $table->string('avatar');
            $table->rememberToken(); //varchar de longitud 100, marca "mantener la sesion iniciada"
            $table->timestamps(); //Al guardar se almacena la fecha en "created_at" y al modificar, pone la fecha en updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users'); //Elimina la tabla
    }
}
