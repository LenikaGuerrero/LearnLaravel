<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //$this->call(CursoSeeder::class);
        Curso::factory(10)->create(); //Crear 10 Registros en curso
        User::factory(50)->create(); // Crear 50 Registros en usuarios
    }
}
