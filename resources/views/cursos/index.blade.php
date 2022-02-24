@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1>Bienvenidos a la página principal de cursos</h1>
    <a href="{{route('cursos.create')}}">Crear curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{route('cursos.show', $curso)}}">{{ $curso->name }}</a>
            </li>
            {{route('cursos.show', $curso)}}
        @endforeach
    </ul>

    {{ $cursos->links() }}
@endsection


{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cursos</title>
</head>
<body>
    <h1>Bienvenidos a la página principal de cursos</h1>
</body>
</html> --}}
