@extends('alumno.master')
@section('title', 'Ver un hecho')
@section('content')

    <div class="container col-md-8 col-md-offset-2">
            <div class="well well bs-component">
                <div class="content">
                    <table class="table">
                        <tr>
                            <td><strong>Hecho</strong></td>
                            <td>{!! $hecho->id !!}</td>
                        </tr>
                        <tr>
                            <td><strong>Titulo</strong></td>
                            <td>{!! $hecho->title !!}</td>
                        </tr>
                        <tr>
                            <td><strong>Contenido</strong></td>
                            <td>{!! $hecho->content !!}</td>
                        </tr>
                    </table>
                </div>
                <a href="{!! action('HechosController@edit', $hecho->slug) !!}" class="btn btn-info pull-left">Modificar</a>

               <form method="post" action="{!! action('HechosController@destroy', $hecho->slug) !!}" class="pull-left">
                   <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                      <div>
                        <button type="submit" class="btn btn-warning">Borrar</button>
                      </div>
                </form>

                <div class="clearfix"></div>
            </div>
    </div>

@endsection