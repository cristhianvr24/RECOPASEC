<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor_Academico extends Model
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
        'condicion',
        'especialidad'
    ];
    public function Condicion(){
        return $this->belongsTo(Condicion::class);
    }
    public function Especialidad(){
        return $this->belongsTo(Especialidad::class);
    }
}
