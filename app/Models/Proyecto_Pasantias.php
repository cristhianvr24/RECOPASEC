<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto_Pasantias extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo',//codigo que se le designe al proyecto
        'titulo',
        'Fecha de inicio',
        'Fecha de culminacion',
        'Tutor institucional', //Tutor designado por la empresa
        'Tutor academico' //tutor designado por la universidad
    ];
    public function Tutor_Institucional(){
        return $this->belongsTo(Tutor_Comunitario::class);
    }public function Tutor_Academico(){
        return $this->belongsTo(Tutor_Academico::class);
    }
}
