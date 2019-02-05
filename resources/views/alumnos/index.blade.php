@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Alumnos</div>

                <div class="panel-body table-responsive">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="alumnos/create" class="btn btn-primary">Crear alumno</a>
                    <a href="/home" class="btn btn-primary">Inicio</a>
                    <hr>

                    <table class="table ">
                        <thead>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Grado</th>
                            <th>Seccion</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            @foreach($alumnos as $alumno)
                            <tr>
                                <td>{{$alumno->nombres}}</td>
                                <td>{{$alumno->apellidos}}</td>
                                <td>{{$alumno->grado}}</td>
                                <td>{{$alumno->seccion}}</td>
                            <td><a href="alumnos/{{$alumno->id}}/edit" class="btn btn-warining">Editar</a></td>
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