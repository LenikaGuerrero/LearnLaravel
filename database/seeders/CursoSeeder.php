<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new Curso();

        $curso->nombre = "Laravel";
        $curso->descripcion = "Prueba";
        $curso->categoria = "Desarrollo";

        $curso->save();

        $curso2 = new Curso();

        $curso2->nombre = "Laravel";
        $curso2->descripcion = "Prueba";
        $curso2->categoria = "Desarrollo";

        $curso2->save();

        $curso3 = new Curso();

        $curso3->nombre = "Laravel";
        $curso3->descripcion = "Prueba";
        $curso3->categoria = "Desarrollo";

        $curso3->save();
    }
}
