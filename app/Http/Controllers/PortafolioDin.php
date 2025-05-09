<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\Foto;
use Illuminate\Http\Request;

class PortafolioDin extends Controller
{
    public function portafolio()
    {
        $proyectos = Proyecto::with('fotos')->paginate(9); // Cargamos los proyectos con sus fotos y paginamos a max 9 por página
        return view('proyectos', compact('proyectos'));
    }

    public function proyecto($id)
    {
        $proyecto = Proyecto::with('fotos')->findorFail($id); // Cargamos el proyecto con sus fotos
        return view('proyecto', compact('proyecto'));
    }
}
