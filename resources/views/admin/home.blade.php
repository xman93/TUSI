@extends('layouts.master')
@section('title', 'Administración')
@section('content')
<div class="container">
	<div class="row banner">
		<div class="col-md-12">
			<h3 class="text-center">Bienvenido <b>{{ Auth::user()->name }},</b></h3><hr>
			<h4 class="text-center">Has accedido al área de <i>Administración</i> del sistema.</h4>
		</div>
	</div>
@endsection


