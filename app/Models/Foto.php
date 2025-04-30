<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Foto extends Model
{
    use HasFactory;

    protected $fillable = ['proyectos_fk', 'url']; // Define los campos que se pueden llenar de manera masiva.


    public function getUrlCompletaAttribute()
    {
        return asset('storage/' . $this->url); // Devuelve la URL completa de la imagen
    }


    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'proyectos_fk'); // Relación muchos a uno.
    }
}
