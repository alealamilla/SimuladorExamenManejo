<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuestas extends Model
{
    use HasFactory;
    protected $table = "respuestas";
    protected $fillable = ["texto", "correcta", "id_pregunta"];

    public function pregunta()
    {
        return $this->belongsTo(Preguntas::class, "id_pregunta");
    }
}
