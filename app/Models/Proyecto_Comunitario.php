<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto_Comunitario extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo',
        'titulo',
        'fecha de Inicio',
        'fecha de culminacion',
        'Tutor Comunitario',
        'Tutor Academico'
    ];
    public function Tutor_Comunitario(){
        return $this->belongsTo(Tutor_Comunitario::class);
    }public function Tutor_Academico(){
        return $this->belongsTo(Tutor_Academico::class);
    }
}
