<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class);

// Route::get('/', function () {
//     // return view('welcome');
//     return "Bievenido a la página principal";
// });

// Novedad Laravel 9
Route::controller(CursoController::class)->group(function() {
    Route::get('cursos','index')->name('cursos.index');
    Route::get('cursos/create', 'create')->name('cursos.create');
    Route::get('cursos/{id}','show')->name('cursos.show');
});

// Route::get('cursos', [CursoController::class, 'index']);

// // Route::get('cursos', function() {
// //     return "Bienvenidos a la página cursos";
// // });

// Route::get('cursos/create', [CursoController::class, 'create']);

// // Route::get('cursos/create', function () {
// //     return "En esta página podrás crear un curso";
// // });

// Route::get('cursos/{curso}', [CursoController::class, 'show']);

// // Route::get('cursos/{curso}', function($curso) {
// //     return "Bienvenido al curso: $curso";
// // });

//              //puede ser opcional la variable categoria?
// // Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
// //     if($categoria) {
// //         return "Bienvenido al curso $curso, de la categoría $categoria";
// //     } else {
// //         return "Bienvenido al curso: $curso";
// //     }
// // });


