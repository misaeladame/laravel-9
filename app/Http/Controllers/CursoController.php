<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    public function index() {
        // return "Bienvenidos a la página cursos";

        //$cursos = Curso::all();
        $cursos = Curso::orderBy('id', 'desc')->paginate();

        // return $cursos;
        return view('cursos.index', compact('cursos'));
    }

    public function create() {
        // return "En esta página podrás crear un curso";
        return view('cursos.create');
    }

    public function store(StoreCurso $request) {


        // $request->validate([
        //     'name' => 'required|max:20',
        //     'descripcion' => 'required|min:10',
        //     'categoria' => 'required'
        // ]);



        $curso = new Curso();

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();

                                            // $curso->id
        return redirect()->route('cursos.show', $curso);
    }

    public function show(Curso $curso) {
        // return "Bienvenido al curso $curso";
        // return view('cursos.show', ['curso' => $curso]);
        return view('cursos.show', compact('curso'));
    }

                        // //$id
    public function edit(Curso $curso) {
        // // $curso = Curso::find($id);
        // // return $curso;
        // return $curso;
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso) {

        $request->validate([
            'name' => 'required|max:10',
            'descripcion' => 'required|min:10',
            'categoria' => 'required'
        ]);

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }
}
