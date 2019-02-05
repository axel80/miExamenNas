<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materia = Materia::orderBy('id', 'ASC')->get(); 

        return view('materias.index')->with('materias', $materia);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumnos = Alumno::orderBy('id', 'ASC')->pluck('id', 'nombres');
        return view('materias.create')->with('alumnos', $alumnos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materia = new Materia($request->all());
        $materia->save();

        return redirect(route('materias.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materia  $Materia
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $Materia)
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materia  $Materia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materia = Materia::findOrfail($id);
        return view('materias.edit')->with('materia', $materia);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materia  $Materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    
        $materia = Materia::findOrFail($request->id);
        $materia->fill($request->all());
        $materia->update();

        return redirect(route('materia.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materia  $Materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $Materia)
    {
        //
    }
}
