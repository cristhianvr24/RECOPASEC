<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor_Comunitario extends Model
{
    use HasFactory;
    protected $fillable = [
        'cedula',
        'nombre1',
        'nombre2',
        'apellido1',
        'apellido2',
        'telefono',
        'email',
        'consejo comunal',
        'cargo'
    ];
    public function Estado(){
        return $this->belongsTo(Estado::class);
    }
}

