<!------------------------------- INICIO DEL ARCHIVO DE jugador.php ------------------------>
<?php 	
	require_once "dependencias/cabecera/header.php";
	require_once "dependencias.php";
	require_once "db.php";
	$conexion = conexion();
 ?>
 <div class="container letra" style="margin-top: 5%">	
 	<div class="row justify-content-center">	
 		<div class="col-sm-6 col-md-4">
 			<div class="container">
	 			<button data-toggle="collapse" data-target="#demo1" class="btn btn-primary btn-lg">
	 			NUEVO  <i class="fas fa-plus-circle"></i>
	 			</button>
 				<a href="index.php" class="btn btn-danger btn-lg">MENU <i class="fas fa-home"></i></a>
 			</div>
 			<!------------------- INICIO DE FORMULARIO PARA CREAR JUGADOR NUEVO ---------------->
 		 		<div id="demo1" class="collapse"> 
	 	 			<div class="card card-header text-light bg-dark"><h3>CREAR NUEVO JUGADOR</h3></div>
			 			<div class="card card-body">
		 					<form action="nuevoJugador.php" method="post">
		 						<div class="form-group">
		 							<input type="number" name="Id_Jugador" placeholder="Id_Jugador" autofocus required="">
		 						</div>

 								<div class="form-group">
 									<input type="text" name="Nombre_Jugador" placeholder="Nombre_Jugador" required="">
 								</div>

	 							<div class="form-group">
	 								<input type="phone" name="Edad" placeholder="Edad" maxlength="2" minlength="2" required="">
 								</div>

 								<div class="form-group">
 									<input type="phone" name="Dorsal" placeholder="Dorsal" maxlength="2" minlength="1" required="">
 								</div>

 								<div class="form-group">
 									<input type="text" name="Id_Posicion" list="pos" placeholder="Posicion"  required="">
 									<datalist id="pos">
 										<?php 
 											$query = "SELECT *FROM posicion";
 											$resultado = mysqli_query($conexion,$query);

 											while ($fila = mysqli_fetch_array($resultado))
 											{ 								
 										 ?>
 										 <option><?php echo $fila ['Id_Posicion']." ". $fila ['Descripcion_Posicion']; ?></option>
 										<?php } ?>
 									</datalist>
 								</div>
 								<!----------- INICIO CAMPO DE BUSQUEDA DE LA SELECCION ---------->
 								<div class="form-group">
 									<input type="text" name="Id_Seleccion" list="id_sele" placeholder="Seleccion"  required="">
 									<datalist id="id_sele">
 										<?php 
 											$query = "SELECT *FROM seleccion";
 											$resultado = mysqli_query($conexion,$query);

 											while ($fila = mysqli_fetch_array($resultado))
 											{ 											 										
 										 ?>
 										 <option><?php echo $fila ['Id_Seleccion']." ".$fila ['Nombre_Seleccion']; ?></option>
 										<?php } ?>
 									</datalist>
 								</div>
 								<!----------- FIN CAMPO DE BUSQUEDA DE LA SELECCION------------>

 								<!------------- INICIO CAMPO DE BUSQUEDA DEL CLUB ----------->
 								<div class="form-group">
 									<input type="text" name="Id_Club" list="id_club" placeholder="Club" required="">
 										<datalist id="id_club">
 											<?php 
 												$query = "SELECT *FROM club";
 												$resultado = mysqli_query($conexion,$query);

 												while ($fila = mysqli_fetch_array($resultado))
 												{	
 											 ?>
 											 <option><?php echo $fila ['Id_Club']." ".$fila ['Nombre_Club']; ?></option>
 											<?php } ?>
 										</datalist>
 								</div>
 								<!------------------ FIN CAMPO DE BUSQUEDA DEL CLUB ----------------->
 								<div class="form-group">
 									<input  type="submit" class="btn btn-success" name="enviar" value="CREAR ">
 								</div>
 							</form>
 						</div> 					
	 			</div>
	 			<!------------------ FIN DE FORMULARIO PARA CREAR JUGADOR NUEVO ----------------->
 		</div>
 	</div>	
 </div>	
<!------------------- INICIO DE LA TABLA DE NOMBRE DEL JUGADOR---------------->
<div class="container letra" style="margin-top: 3%">
	<div class="row justify-content-center">
		<div class="col-6">
			<div class="container">
				<div class="row justify-content-center">
					<button data-toggle="collapse" data-target="#demo2" class="btn btn-success btn-outline-light btn-lg">JUGADORES </button>
				</div>
			</div><br>
			<div id="demo2" class="collapse">
				<table class="table table-bordered table-striped table-dark">					
					<thead>
						<th>ID</th>
						<th>JUGADOR</th>
					</thead>
					<!------------- INICIO DE BUSQUEDA DE JUGADOR POR POSICION ---------->
					<div class="container">
						<div class="row justify-content-center">
						<form action="searchPosicion.php" method="post">
				 			<input type="text" name="Id_Posicion" list="player" placeholder="POR POSICION" required="">
	 						<datalist id="player">
 							<?php 
 								$query ="SELECT *FROM posicion";
 								$resultado = mysqli_query($conexion,$query);
 								while ($fila = mysqli_fetch_array($resultado))
 								{	 										
 							?>	
	 							 <option><?php echo $fila ['Id_Posicion']." ".$fila['Descripcion_Posicion']; ?></option>
 							<?php } ?>
	 						</datalist>
	 						<button type="submit" class="btn-sm btn-primary"><i class="fas fa-search"></i></button>
				 		</form>
				 		</div>
				 	</div>
				 	<!-------------- FIN DE BUSQUEDA DE JUGADOR POR POSICION --------------->

				 	<!-------------- INICIO DE BUSQUEDA DEL DORSAL ----------------->
					<div class="container">
						<div class="row justify-content-center">
						<form action="searchDorsal.php" method="post">
				 			<input type="text" name="Dorsal" list="numero" placeholder="POR DORSAL" required="">
	 						<datalist id="numero">
 							<?php 
 								$query ="SELECT *FROM jugador";
 								$resultado = mysqli_query($conexion,$query);
 								while ($fila = mysqli_fetch_array($resultado))
 								{	 										
 							?>	
	 							 <option><?php echo $fila ['Dorsal']; ?></option>
 							<?php } ?>
	 						</datalist>
	 						<button type="submit" class="btn-sm btn-primary"><i class="fas fa-search"></i></button>
				 		</form>
				 		</div>
				 	</div>
				 	<!-------------- FIN DE BUSQUEDA DEL DORSAL ------------->

				 	<!----------- INICIO DE BUSQUEDA DE EDAD DEL JUGADOR ------------->
				 	<div class="container">
						<div class="row justify-content-center">
						<form action="searchAge.php" method="post">
				 			<input type="text" name="Edad" list="age" placeholder="POR EDAD" required="">
	 						<datalist id="age">
 							<?php 
 								$query ="SELECT *FROM jugador";
 								$resultado = mysqli_query($conexion,$query);
 								while ($fila = mysqli_fetch_array($resultado))
 								{	 										
 							?>	
	 							 <option><?php echo $fila ['Edad']; ?></option>
 							<?php } ?>
	 						</datalist>
	 						<button type="submit" class="btn-sm btn-primary"><i class="fas fa-search"></i></button>
				 		</form>
				 		</div>
				 	</div>
				 	<!--------- FIN DE BUSQUEDA DE EDAD DEL JUGADOR ---------->
					<br>
<!--------- INICIO DE REGISTRO DE LA TABLA JUGADORES ------------>
					<tbody>
						<?php 
							$tabla = "SELECT *FROM jugador";
							$query = mysqli_query($conexion,$tabla);

							while ($fila = mysqli_fetch_array($query))
							{
						?>
						<tr>								
							 	<td><?php echo $fila ['Id_Jugador']; ?></td>
							 	<td><?php echo $fila ['Nombre_Jugador']; ?></td>
						</tr>
							<?php } ?>
					</tbody>
<!----------------- FIN DE REGISTRO DE LA TABLA JUGAODRES ----------->
				</table>
			</div>
		</div>
	</div>
</div>
<!------------------ INICIO DE LA TABLA DE JUGADOR, CLUB Y SELECCION ----------------->
<div class="container letra" style="margin-top: 3%">
	<div class="row justify-content-center">
		<div class="col-6">
			<div class="container">
				<div class="row justify-content-center">
					<button data-toggle="collapse" data-target="#demo3" class="btn btn-success btn-outline-light btn-lg">JUGADORES, SELECCION Y CLUB </button>
				</div>
			</div><br>
			<div id="demo3" class="collapse">
				<table class="table table-bordered table-striped table-dark text-center">					
					<thead>
						<th>JUGADOR</th>
						<th>CLUB</th>
						<th>SELECCION</th>
					</thead>
				 	<!------- INICIO DE BUSQUEDA DE SELECCION DEL JUGADOR ----------->
				 	<div class="container">
						<div class="row justify-content-center">
						<form action="searchSeleccionPlayer.php" method="post">
				 			<input type="text" name="Id_Seleccion" list="seleccion" placeholder="POR SELECCION" required="">
	 						<datalist id="seleccion">
 							<?php 
 								$query ="SELECT *FROM seleccion";
 								$resultado = mysqli_query($conexion,$query);
 								while ($fila = mysqli_fetch_array($resultado))
 								{	 										
 							?>	
	 							 <option><?php echo $fila ['Id_Seleccion']." ".$fila["Nombre_Seleccion"]; ?></option>
 							<?php } ?>
	 						</datalist>
	 						<button type="submit" class="btn-sm btn-primary"><i class="fas fa-search"></i></button>
				 		</form>
				 		</div>
				 	</div>
				 	<!------ FIN DE BUSQUEDA DE SELECCION DEL JUGADOR -------->

				 	<!--------- INICIO DE BUSQUEDA DE CLUB DEL JUGADOR ----------->
				 	<div class="container">
						<div class="row justify-content-center">
						<form action="searchClub.php" method="post">
				 			<input type="text" name="Id_Club" list="club" placeholder="POR CLUB" required="">
	 						<datalist id="club">
 							<?php 
 								$query ="SELECT *FROM club";
 								$resultado = mysqli_query($conexion,$query);
 								while ($fila = mysqli_fetch_array($resultado))
 								{	 										
 							?>	
	 							 <option><?php echo $fila ['Id_Club']." ".$fila["Nombre_Club"]; ?></option>
 							<?php } ?>
	 						</datalist>
	 						<button type="submit" class="btn-sm btn-primary"><i class="fas fa-search"></i></button>
				 		</form>
				 		</div>
				 	</div>
				 	<!----- FIN DE BUSQUEDA DE CLUB DE JUGADOR ------->
					<br>
<!------------------- INICIO DE REGISTRO DE LOS JUGADORES EN LA TABLA --------->
					<tbody>
						<?php  
					$query =
					"SELECT jugador.Nombre_Jugador, club.Nombre_Club, seleccion.Nombre_Seleccion
					FROM jugador
					INNER JOIN asignacion_jugador ON jugador.Id_Jugador = asignacion_jugador.Id_Jugador
					INNER JOIN club ON asignacion_jugador.Id_Club = club.Id_Club
					INNER JOIN seleccion ON asignacion_jugador.Id_seleccion = seleccion.Id_Seleccion;";
					$resultado = mysqli_query($conexion,$query);
				 			
					while ($fila = mysqli_fetch_array($resultado))
					{ 						
				?>
						<tr>								
							<td><?php echo $fila ['Nombre_Jugador']; ?></td>
							<td><?php echo $fila ['Nombre_Club']; ?></td>
							<td><?php echo $fila ['Nombre_Seleccion']; ?></td>
						</tr>
							<?php } ?>
					</tbody>
<!--------------- FIN DE REGISTRO DE LOS JUGADORES EN LA TABLA ------------->
				</table>
			</div>
		</div>
	</div>
</div>
<!--------- FIN DE LA TABLA DE JUGADOR, CLUB Y SELECCION ---------->
<?php require_once "dependencias/cabecera/footer.php"; ?>
<!------------------- FIN DEL ARCHIVO DE jugador.php ------------>