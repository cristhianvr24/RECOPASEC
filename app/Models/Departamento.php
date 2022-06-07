<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'empresa'
    ];
    public function Empresa(){
        return $this->belongsTo(Empresa::class);
    }
}
