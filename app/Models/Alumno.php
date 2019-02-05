<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    public $table="alumnos";
    public $primaryKey = 'id';
    protected $fillable = [
        'nombres', 'apellidos', 'grado', 'seccion'
    ];

    public function materias(){
        return $this->hasMany('App\Models\Materia', 'alumno_id', 'id');
    }
}
