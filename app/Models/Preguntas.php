<?php

namespace App\Models;

use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Preguntas extends Model
{
    use HasFactory;
    protected $table = "preguntas";
    protected $fillable = ["enunciado", "foto", "id_correcta"];

    public function opciones()
    {
        return $this->hasMany(Respuestas::class, 'id_pregunta', 'id');
    }

    public function setImagenAttribute($archivo)
    {
        if ($archivo == null) {
            $this->attributes["foto"] = null;
        } else {
            // Store the uploaded file and get the file path
            $file = $archivo->store("preguntas", 'public');
            $this->attributes["foto"] = $file;
        }
    }
}
