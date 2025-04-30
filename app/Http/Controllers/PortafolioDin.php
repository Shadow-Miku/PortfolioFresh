<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\Foto;
use Illuminate\Http\Request;

class PortafolioDin extends Controller
{
    public function portafolio()
    {
        $proyectos = Proyecto::with('fotos')->paginate(9); // Cargamos los proyectos con sus fotos
        return view('proyectos', compact('proyectos'));
    }
}
