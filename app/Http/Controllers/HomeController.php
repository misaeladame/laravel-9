<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        // return view('welcome');
        return "Bievenido a la página principal";
    }
}
