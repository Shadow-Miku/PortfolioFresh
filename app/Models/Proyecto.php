<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Proyecto extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'functionresume', 'category', 'youtube', 'github', 'demo']; // Define los campos que se pueden llenar de manera masiva.


    public function getImagenPortadaAttribute()
    {
        return $this->fotos->first()?->url_completa ?? null; // Devuelve la primera imagen o null si no hay ninguna
    }


    public function fotos()
    {
        return $this->hasMany(Foto::class, 'proyectos_fk'); // Relación uno a muchos.
    }
}
