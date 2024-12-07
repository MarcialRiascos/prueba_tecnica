<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
    ];

    public function empleados(){
        return $this->belongsToMany(EmpleadoRol::class ,'empleado_rols','empleado_id', 'rol_id');
    }
}
