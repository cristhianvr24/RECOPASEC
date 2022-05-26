<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $fillable = [
        'cedula',
        'Primer Nombre',
        'Segundo Nombre',
        'Primer Apellido',
        'Segundo Apellido',
        'telefono',
        'correo'
    ];
}
