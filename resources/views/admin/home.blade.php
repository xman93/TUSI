@extends('layouts.master')
@section('title', 'Administración')
@section('content')
    <div class="container">
        <div class="row banner">
            <div class="col-md-12">
                <h3 class="text-center">Bienvenido <b>{{ Auth::user()->name }},</b></h3><hr>
                <h4 class="text-center">Has accedido al área de <i>Administración</i> del sistema.</h4>
                <p>Número de etiquetas:{{$countEtiquetas}}</p>
                <h2>Lista de Etiquetas Predefinidas</h2>
                <table class="table">
                    @foreach($etiquetas as $e)
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Creada</th>
                            <th>Actualizada</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$e->id_hecho}}</td>
                            <td>{{$e->nombre}}</td>
                            <td>{{date('F d, Y', strtotime($e->created_at))}}</td>
                            <td>{{date('F d, Y', strtotime($e->updated_at))}}</td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>

            </div>

            <!--solo puede ver las etiquetas-->



        </div>
@endsection


