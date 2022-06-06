<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consejo_Comunal extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
    ];
    public function Comunidad(){
        return $this->belongsTo(Comunidad::class);
    }
}