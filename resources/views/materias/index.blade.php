@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Matrias</div>

                <div class="panel-body table-responsive">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="materias/create" class="btn btn-primary">Crear materia</a>
                    <a href="/home" class="btn btn-primary">Inicio</a>
                    <hr>

                    <table class="table ">
                        <thead>
                            <th>Materia</th>
                            <th>Nota 1</th>
                            <th>Nota 2</th>
                            <th>Promedio</th>
                            <th>Alumno</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            @foreach($materias as $materia)
                            <tr>
                                <td>{{$materia->nombre_materia}}</td>
                                <td>{{$materia->nota1}}</td>
                                <td>{{$materia->nota2}}</td>
                                <td>{{($materia->nota1 + $materia->nota2)/2}}</td>
                                <td>{{$materia->alumno->nombres}}</td>
                                
                            <td><a href="materias/{{$materia->id}}/edit" class="btn btn-warining">Editar</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection