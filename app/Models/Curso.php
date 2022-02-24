<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // // Ignora la convención para administrar la tabla users
    // protected $table = "users";

    // protected $fillable = ['name', 'descripcion', 'categoria'];
    protected $guarded = [];

    // Para las url's amigables
    public function getRouteKeyName()
    {
        return "slug";
    }

}
