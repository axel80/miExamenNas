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

    public function Materias(){
        $this->belongsToMany('App\Models\Materia', 'materia_alumnos', 'alumno_id', 'materia_id');
    }
}
