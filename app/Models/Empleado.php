<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'email',
        'sexo',
        'area_id',
        'boletin',
        'descripcion'
    ];

    public function roles(){
        return $this->belongsToMany(Roles::class ,'empleado_rols','empleado_id','rol_id');
    }

    public function areas(){
        return $this->belongsTo('App\Models\Areas', 'area_id');
    }
}
