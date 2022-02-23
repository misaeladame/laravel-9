<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        // // $curso = new Curso();

        // // $curso->name = "Laravel";
        // // $curso->descripcion = "El mejor framework de PHP";
        // // $curso->categoria = "Desarrollo Web";

        // // $curso->save();

        // // $curso2 = new Curso();

        // // $curso2->name = "Laravel";
        // // $curso2->descripcion = "El mejor framework de PHP";
        // // $curso2->categoria = "Desarrollo Web";

        // // $curso2->save();

        // // $curso3 = new Curso();

        // // $curso3->name = "Laravel";
        // // $curso3->descripcion = "El mejor framework de PHP";
        // // $curso3->categoria = "Desarrollo Web";

        // // $curso3->save();

        // $this->call(CursoSeeder::class);

        Curso::factory(50)->create();
    }
}
