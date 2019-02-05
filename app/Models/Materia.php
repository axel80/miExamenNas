<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{

    public $table="materias"




    public function Materias(){
        $this->belongsToMany('App\Models\Alumno', 'materia_alumnos', 'materia_id', 'alumno_id');
    }
}
