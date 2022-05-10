<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'Fecha_registro',
        'Fecha_cierre',
        'Id_estado',
        'Descripcion',
    ];
}
