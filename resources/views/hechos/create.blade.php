@extends('layouts.master')
@section('title', 'Nuevo hecho')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post">
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                @if (session('status'))
                    <div class = "alert alert-success">
                        {{ session ('status') }}
                    </div>
                @endif

                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <fieldset>
                    <legend>Crear un nuevo hecho</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Título</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" placeholder="Título" name="title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Contenido</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="content" name="content"></textarea>
                            <span class="help-block">Descripción del contenido de tu hecho.</span>
                        </div>
                    </div>

                    <!--<div class="form-group">
                        <label for="content" class="col-lg-2 control-label">FOTO</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="content" name="content"></textarea>
                            <span class="help-block">FOTOS</span>
                        </div>
                    </div>-->

                    <div class="form-group">
                        <label for="curso_academico" class="col-lg-2 control-label">Curso Académico</label>
                        <div class="col-lg-10">
                            <div class="col-md-6">
                                <select class="form-control" rows="3" id="curso_academico" name="curso_academico">
                                    <option value="1">Primero de Carrera</option>
                                    <option value="2">Segundo de Carrera</option>
                                    <option value="3">Tercero de Carrera</option>
                                    <option value="4">Cuarto de Carrera</option>
                                    <option value="5">Quinto de Carrera</option>
                                    <option value="6">Secto de Carrera</option>
                                    <option value="7">Séptimo de Carrera</option>
                                    <option value="8">Octavo de Carrera</option>
                                </select>
                            </div>
                            <span class="help-block">Curso en el que realizaste tu Hecho</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="fecha_hecho" class="col-lg-2 control-label">Fecha del Hecho</label>
                        <div class="col-lg-10">
                            <input type="date" class="form-control" rows="3" id="fecha_hecho" name="fecha_hecho" />
                            <span class="help-block">Fecha en la que realizaste el Hecho</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection