<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index() {
        // return "Bienvenidos a la página cursos";

        //$cursos = Curso::all();
        $cursos = Curso::paginate();

        // return $cursos;
        return view('cursos.index', compact('cursos'));
    }

    public function create() {
        // return "En esta página podrás crear un curso";
        return view('cursos.create');

    }

    public function show($id) {
        // return "Bienvenido al curso $curso";

        $curso = Curso::find($id);

        // return view('cursos.show', ['curso' => $curso]);
        return view('cursos.show', compact('curso'));


    }
}
