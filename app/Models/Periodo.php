<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo del estudiante',
        'codigo de la carrera'
    ];
    public function Estudiante(){
        return $this->belongsTo(Estudiante::class);
    }public function Carrera(){
        return $this->belongsTo(Carrera::class);
    }
}
