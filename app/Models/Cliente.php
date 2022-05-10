<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nombre',
        'Apellido',
        'Tipo_usuario',
        'Nro_documento',
        'telefono',
        'email',
    ];

    public function User(){
        return $this->hasMany("App\User");
    }
}
