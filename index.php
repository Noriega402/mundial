<!------------------------------------------ INICIO DE ARCHIVO DE index.php ---------------------------------------------------------->
<?php  
	require_once "dependencias/cabecera/header.php";
	require_once "dependencias.php";
?>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark text-light letra" >
	<img src="dependencias/boostrap/img/Qatar_2022_Logo.png" style="width: 50px; height: 50px;">
	<label class="nav-link">Mundial Qatar 2022</label>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#uno">
		<span class="navbar-toggler-icon"></span>
	</button>

<div class="collapse navbar-collapse letra" id="uno">
	<ul class="navbar-nav">	

		<button class="btn btn-dark">
			<li class="nav-item dropdown">
				<a href="equipos.php" class="nav-link dropdown-toggle text-light" data-toggle="dropdown">Equipos</a>
					<div class="dropdown-menu">
						<a href="selecciones.php" class="dropdown-item">Selecciones</a>
					<div class="dropdown-divider"></div>
						<a href="club.php" class="dropdown-item">Clubes</a>
					</div>
			</li>
		</button>
		<button class="btn btn-dark">
			<li class="nav-item dropdown"><a href="allGrupos.php" class="nav-link text-light">Grupos</a></li>
		</button>
		<button class="btn btn-dark">
			<li class="nav-item"><a href="jugador.php" class="nav-link text-light">Jugadores</a></li>
		</button>
		<button class="btn btn-dark">
			<li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle text-light" data-toggle="dropdown">Partidos</a>
				<div class="dropdown-menu">
					<a href="#" class="dropdown-item">Todos los Partidos</a>
						<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item">Fecha 1</a>
							<a href="#" class="dropdown-item">Fecha 2</a>
							<a href="#" class="dropdown-item">Fecha 3</a>
								<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item">Eliminatorias</a>
				</div>				
			</li>
		</button>
		<button class="btn btn-dark">
			<li class="nav-item"><a href="estadios.php" class="nav-link text-light">Estadios</a></li>
		</button>
		<button class="btn btn-dark">
			<li class="nav-item"><a href="#" class="nav-link text-light">Estadisticas</a></li>
		</button>
		<button class="btn btn-dark">
			<li class="nav-item"><a href="#" class="nav-link text-light">Ranking FIFA</a></li>
		</button>
	</ul>
</div>
</nav>
<?php require_once "dependencias/cabecera/footer.php"; ?>
<!------------------------------ FIN DE ARCHIVO DE index.php -------------------------------->