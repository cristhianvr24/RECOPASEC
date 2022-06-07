<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacion_Pasantias extends Model
{
    use HasFactory;
    protected $fillable = [
        'calificacion del tutor academico', //Calificacion del tutor academico
        'calificacion del tutor institucional', //calificacion del tutor institucional
        'calificacion del comite evaluador', //calificacion global del comite evaluador
        'periodo', //periodo en el que cursa la pasantia
        'proyecto de pasantias' //codigo del proyecto 
    ];
    public function Periodo(){
        return $this->belongsTo(Periodo::class);
    }public function Proyecto_Pasantias(){
        return $this->belongsTo(Proyecto_Pasantias::class);
    }
}
