<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intentos extends Model
{
    use HasFactory;
    protected $table = "intentos";
    protected $fillable = ["id_usuario", "id_examen", "conteo_intentos"];

    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, "id_usuario");
    }

    public function examen()
    {
        return $this->belongsTo(Examenes::class, "id_examen");
    }
}
