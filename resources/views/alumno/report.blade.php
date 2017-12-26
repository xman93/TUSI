@extends('layouts.master')
@section('title', 'Alumnos')
@section('content')

	<link REL=StyleSheet HREF="css/timeline.css" type="text/css" media=screen>
	<div class="container">
		<div class="row banner">
			<div class="col-md-12">
				<h4 class="text-center">Has accedido al área de <i>Reportes</i> del sistema.</h4>
				<button>Por CV</button>

				<button>Por TimeLine</button>
			</div>
		</div>

		<!--Aqui comienza el reporte-->
		<div class="container">
			<div class="page-header">
				<h1 id="">Timeline</h1>
			</div>
			@foreach($hechos as $hecho)
				<div id="timeline"><div class="row timeline-movement timeline-movement-top">
					</div>
					<div class="row timeline-movement">
						<div class="timeline-badge">
							<span class="timeline-balloon-date-day">
								<?php
                                $fecha = DateTime::createFromFormat('Y-m-d',$hecho->fecha_hecho);
                                $nuevaFecha = $fecha->format('d');
                                $mes = $fecha->format('m');
                                ?>
								{{$nuevaFecha}}</span>
							<br>
							<span class="timeline-balloon-date-month">{{$mes->toFormattedDateString()}}</span>
						</div>
						<div class="col-sm-6  timeline-item">
							<div class="row">
								<div class="col-sm-11">
									<div class="timeline-panel credits">
										<ul class="timeline-panel-ul">
											<li><span class="importo">{{$hecho->titulo}}</span></li>
											<li><span class="causale">{{$hecho->descripcion}}</span> </li>
											<li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>{{$hecho->fecha_hecho}}</small></p> </li>
										</ul>
									</div>

								</div>
							</div>
						</div>

						<div class="col-sm-6  timeline-item">
							<div class="row">
								<div class="col-sm-offset-1 col-sm-11">
									<div class="timeline-panel debits">
										<ul class="timeline-panel-ul">
											<li><span class="importo">Datos de conclusiones</span></li>
											<li><span class="causale">Frase que inspiro o descripcion del hecho final</span> </li>
											<li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Fecha cuando acabo</small></p> </li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
	@endforeach
@endsection