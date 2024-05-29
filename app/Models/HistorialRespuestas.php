<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialRespuestas extends Model
{
    use HasFactory;
    protected $table = "historial_respuestas";
    protected $fillable = ["id_his_examen", "id_pregunta", "id_respuesta", "correcta"];

    public function usuario()
    {
        return $this->belongsTo(HistorialExamen::class, "id_his_examen");
    }

    public function pregunta()
    {
        return $this->belongsTo(Preguntas::class, "id_pregunta");
    }

    public function respuesta()
    {
        return $this->belongsTo(Respuestas::class, "id_respuesta");
    }
}
