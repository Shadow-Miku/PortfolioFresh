<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProyectoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyectos = Proyecto::with('fotos')->paginate(12); // Cargamos los proyectos con sus fotos
        return view('proyectos.list', compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proyectos.createProy');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'functionresume' => 'required|string',
            'category' => 'required|string',
            'youtube' => 'nullable|string',
            'github' => 'nullable|string',
            'demo' => 'nullable|string',
            'url.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp', // Validar cada imagen
        ]);

        // 1. Crear el Proyecto
        $proyecto = Proyecto::create([
            'title' => $request->title,
            'description' => $request->description,
            'functionresume' => $request->functionresume,
            'category' => $request->category,
            'youtube' => $request->youtube,
            'github' => $request->github,
            'demo' => $request->demo,
        ]);

        // 2. Subir y guardar las imágenes
        if ($request->hasFile('url')) {
            foreach ($request->file('url') as $file) {
                $path = $file->store('proyectos', 'public'); // Guarda en storage/app/public/proyectos

                Foto::create([
                    'proyectos_fk' => $proyecto->id,
                    'url' => $path,
                ]);
            }
        }

        return redirect()->route('proyectos.list')->with('success', 'Proyecto creado exitosamente.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Proyecto $proyecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyecto $proyecto)
    {
        return view('proyectos.editProy', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyecto $proyecto)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'functionresume' => 'required|string',
            'category' => 'required|string',
            'youtube' => 'nullable|string',
            'github' => 'nullable|string',
            'demo' => 'nullable|string',
            'url.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp'
        ]);

        // Actualizar los campos del proyecto
        $proyecto->update([
            'title' => $request->title,
            'description' => $request->description,
            'functionresume' => $request->functionresume,
            'category' => $request->category,
            'youtube' => $request->youtube,
            'github' => $request->github,
            'demo' => $request->demo,
        ]);

        // Si el usuario sube nuevas imágenes
        if ($request->hasFile('url')) {
            // 1. Eliminar fotos anteriores
            foreach ($proyecto->fotos as $foto) {
                // Eliminar archivo físico
                \Storage::disk('public')->delete($foto->url);

                // Eliminar registro en la base de datos
                $foto->delete();
            }

            // 2. Subir nuevas imágenes
            foreach ($request->file('url') as $fotoFile) {
                $path = $fotoFile->store('proyectos', 'public');

                Foto::create([
                    'proyectos_fk' => $proyecto->id,
                    'url' => $path,
                ]);
            }
        }

        return redirect()->route('proyectos.list')->with('success', 'Proyecto actualizado correctamente');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyecto $proyecto)
    {
        //
    }

}
