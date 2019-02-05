<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{

    public $table="materias";

    public $primaryKey = 'id';
    protected $fillable = [
        'nombre_materia', 'nota1', 'nota2', 'alumno_id'
        
    ];

    public function alumno(){
        return $this->belongsTo('App\Models\Alumno',  'alumno_id', 'id');
    }
}
