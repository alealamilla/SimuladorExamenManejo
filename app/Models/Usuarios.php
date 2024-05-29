<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Usuarios extends Authenticatable
{
    use HasFactory;

    // Define the table name explicitly
    protected $table = "usuarios";

    // Specify which attributes should be mass-assignable
    protected $fillable = ["nombres", "apellidos", "email", "password", "tipo_usuario", "matricula"];

    // Specify which attributes should be hidden
    protected $hidden = ['password'];

    // Mutator for password attribute to hash it
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

}