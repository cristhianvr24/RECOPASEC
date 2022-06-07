<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor_Institucional extends Model
{
    use HasFactory;
    protected $fillable = [
        'cedula',
        'Primer nombre',
        'Segundo nombre',
        'Primer apellido',
        'Segundo apellido',
        'telefono',
        'email',
        'especialidad',
        'departamento'
    ];
    public function Especialidad(){
        return $this->belongsTo(Especialidad::class);
    }public function Departamento(){
        return $this->belongsTo(Departamento::class);
    }
    {
        # code...
    }
}
