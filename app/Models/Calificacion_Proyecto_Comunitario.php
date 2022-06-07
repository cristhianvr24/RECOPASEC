<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacion_Proyecto_Comunitario extends Model
{
    use HasFactory;
    protected $fillable = [
        'calificacion del tutor comunitario',
        'calificacion del tutor academico',
        'periodo',//periodo en el que cursa la asignatura 
        'proyecto comunitario'//codigo del proyecto
    ];
    public function Periodo(){
        return $this->belongsTo(Periodo::class);
    }public function Proyecto_Comunitario(){
        return $this->belongsTo(Proyecto_Comunitario::class);
    }
}
