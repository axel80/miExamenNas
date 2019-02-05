@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Crear alumno</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('materia.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="nombres" class="col-md-4 control-label">Materia</label>

                            <div class="col-md-6">
                                <input id="nombres" type="text" class="form-control" name="nombre_materia" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="apellidos" class="col-md-4 control-label">Nota 1</label>

                            <div class="col-md-6">
                                    <input id="nota1" type="text" class="form-control" name="nota1">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="grado" class="col-md-4 control-label">Nota2</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nota2" required>
                            </div>
                        </div>

                        <div class="form-group">
                                <label for="grado" class="col-md-4 control-label">Alumnos</label>
    
                                <div class="col-md-6">
                                    {!!Form::select('alumno_id', $alumnos, null,['class' => 'form-control'])!!}
                                </div>
                            </div>
    
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                            <div class="col-md-6 col-md-offset-4">
                                    <a href="/alumnos"  class="btn btn-danger">
                                        Cancelar
                                    </a>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
