@extends('layouts.master')
@section('title', 'Alumnos')
@section('content')
<div class="container">
	<div class="row banner">
		<div class="col-md-12">
			<h3 class="text-center">Bienvenido <b>{{ Auth::user()->name }},</b></h3><hr>
			<h4 class="text-center">Has accedido al área de <i>Alumnos</i> del sistema.</h4>
		</div>
	</div>
@endsection