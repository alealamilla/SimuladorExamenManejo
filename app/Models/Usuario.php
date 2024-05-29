<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use SoftDeletes;
    use HasFactory;
    protected $guarded = ['actualizar'];

    protected $hidden = [
        'password',
        'imagen',
        'id_area',
        'id_cargo',
        'created_at',
        'updated_at',
        'deleted_at',
        'asignar',
    ];

    const HEADINGS = [
        'id' => 'ID',
        'nombres' => 'Nombre(s)',
        'apellidos' => 'Apellidos',
        'correo' => 'Usuario',
        'area' => 'Area',
        'cargo' => 'Cargo',
        'descripcion' => 'Descripción de Puesto',
        'titulo' => 'Título',

    ];


    public function setImagenAttribute($archivo)
    {
        if ($archivo == null) {
            $this->attributes["imagen"] = null;
        } else {
            $file = Storage::disk('public')->put("perfiles", $archivo);
            $this->attributes["imagen"] = $file;
        }
    }

    public function setPasswordAttribute(String $password){
        $this->attributes["password"] = Hash::make($password);
    }

   
}
