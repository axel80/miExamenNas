@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Crear alumno</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="/alumno/update">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="nombres" class="col-md-4  control-label">Nombres</label>
                        <input type="hidden" value="{{$alumno->id}}" name="id">

                            <div class="col-md-6">
                            <input id="nombres" type="text" class="form-control" value="{{$alumno->nombres}}" name="nombres" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="apellidos" class="col-md-4 control-label">Apellidos</label>

                            <div class="col-md-6">
                                    <input id="apellidos" type="text" class="form-control" value="{{$alumno->apellidos}}"  name="apellidos">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="grado" class="col-md-4 control-label">Grado</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="grado" value="{{$alumno->grado}}" required>
                            </div>
                        </div>

                        <div class="form-group">
                                <label for="grado" class="col-md-4 control-label">Sección</label>
    
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="seccion" value="{{$alumno->seccion}}" required>
                                </div>
                            </div>
    
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Actualizar
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
