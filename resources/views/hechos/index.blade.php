@extends('layouts.master')
@section('title', 'Listado de Hechos')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Hechos disponibles</h2>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if ($hechos->isEmpty())
                <p> No hay Hechos.</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Contenido</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($hechos as $hecho)
                        <tr>
                            <td>{!! $hecho->id !!}</td>
                            <td>
                                <a href="{!! action('HechosController@show', $hecho->slug) !!}">{!! $hecho->titulo !!} </a>
                            </td>
                            <td>{!! $hecho->descripcion !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection