<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="/"><img src="img/logo_ufv.png" style="margin-top:5px" height="50" alt="LogoUFV"></a>
		</div>
		<!-- Navbar Right -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<p class="navbar-text"><i>Sistema de Información de Trayectoria Universitaria</i></p>
			<ul class="nav navbar-nav navbar-right">
				@if(Auth::guest())
					<li><a href="{{ route('login') }}">Acceso</a></li>
				@elseif (Auth::user()->rol === 'admin')
					<li><a href="/admin/home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
					<li><a href="/admin/altas">Alta de Usuarios</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							{{ Auth::user()->email }} <span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="{{ route('logout') }}"
								   onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
									Cerrar sesión
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li>
				@elseif(Auth::user()->rol === 'alumno')
					<li><a href="/alumnos/home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
					<li><a href="/hechos">Listado de Hechos</a></li>
					<li><a href="/nuevo-hecho">Crear Nuevo</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							{{ Auth::user()->email }} <span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="{{ route('logout') }}"
								   onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
									Cerrar sesión
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li>
				@elseif(Auth::user()->rol === 'profesor')
					<li><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
					<li><a href="#">Ver CV</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							{{ Auth::user()->email }} <span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="{{ route('logout') }}"
								   onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
									Cerrar sesión
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li>
			@endif
		</div>
	</div>
</nav>