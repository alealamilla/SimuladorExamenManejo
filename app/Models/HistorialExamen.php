<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialExamen extends Model
{
    use HasFactory;
    protected $table = "historial_examenes";
    protected $fillable = ["id_usuario", "id_examen", "preguntas_Asignadas", "calificacion", "aprobado"];

    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, "id_usuario");
    }

    public function examen()
    {
        return $this->belongsTo(Examenes::class, "id_examen");
    }
}
