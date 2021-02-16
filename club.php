<!------------------------------------------------ INICIO DE ARCHIVO DE club.php --------------------------------------------------------->
<?php 
	require_once "dependencias/cabecera/header.php";
	require_once "dependencias.php";
	require_once "db.php";
	$conexion = conexion();
 ?>

 <div class="container" style="margin-top: 5%">
 	<div class="row justify-content-center">
 		<div class="col-md-4">
 			<div class="container">
	 			<button data-toggle="collapse" data-target="#demo" class="btn btn-primary btn-lg">
	 			 NUEVO  <i class="fas fa-plus-circle"></i>
	 			</button>
 				<a href="index.php" class="btn btn-danger btn-lg">MENU <i class="fas fa-home"></i></a>
 			</div>
 			<div id="demo" class="collapse"> 
	 	 		<div class="card card-header text-light bg-dark"><h3>CREAR NUEVO CLUB</h3></div>
			 		<!-- INICIO DE FORMUARIO PARA CREAR CLUB-->
			 		<div class="card card-body">
		 				<form action="nuevoClub.php" method="post">
		 					<div class="form-group">
		 						<input type="number" name="Id_Club" placeholder="Id_Club" autofocus required="">
		 					</div>

 							<div class="form-group">
 								<input type="text" name="Nombre_Club" placeholder="Nombre_Club" required="">
 							</div>

	 						<div class="form-group">
	 							<input type="text" name="Id_Pais" list="country" placeholder="Id_Pais" required="">
	 							<datalist id="country">
 								<?php 
 									$query ="SELECT *FROM pais";
 									$resultado = mysqli_query($conexion,$query);
 									while ($fila = mysqli_fetch_array($resultado))
 										{	 										
								?>	
	 								<option><?php echo $fila ['Id_Pais']." ".$fila ['Nombre_Pais']; ?></option>
	 							<?php } ?>
	 							</datalist>
 							</div>
 							<div class="form-group">
 								<input  type="submit" class="btn btn-success" name="enviar" value="CREAR">
 							</div>
 						</form>
 					</div> 
 					<!-- FIN DE FORMUARIO PARA CREAR CLUB-->					
	 		</div>
 		</div>
 	</div>
 </div>
 <!-- INICIO DE TABLA DE CLUBES-->
 <div class="container" style="margin-top: 3%">
 	<div class="row justify-content-center">
		<div class="col-6">
			<div class="container">
				<div class="row justify-content-center">
					<button data-toggle="collapse" data-target="#demo2" class="btn btn-success btn-outline-light btn-lg">
					CLUB  <i class="fas fa-futbol"></i>
					</button>
				</div>
			</div><br>			
			<div id="demo2" class="collapse">
			 	<table class="table table-sm table-bordered table-striped table-dark text-center">
			 		<thead>
			 			<th>ID</th>
			 			<th>CLUB</th>
			 		</thead>
			 		<tbody>
			 		<?php 
			 			$tabla = "SELECT * FROM club";
			 			$query = mysqli_query($conexion,$tabla);

			 			while ($fila = mysqli_fetch_array($query))
			 			{ 						
			 		?>
			 			 <tr>
			 			 	<td><?php echo $fila ['Id_Club']; ?></td>
			 			 	<td><?php echo $fila ['Nombre_Club']; ?></td>
			 			 </tr>
			 		<?php } ?>
			 		</tbody>
			 	</table>
			</div>
		</div>
 	</div>
 </div>
 <!-- FIN DE TABLA DE CLUBES-->
 <!-- INICIO DE TABLA DE PAIS Y CLUB-->
 <div class="container" style="margin-top: 3%">
 	<div class="row">
		<div class="col-12">
			<div class="container">
				<div class="row justify-content-center">
					<button data-toggle="collapse" data-target="#demo3" class="btn btn-success btn-outline-light btn-lg">
					PAIS Y CLUB  <i class="fas fa-futbol"></i>
					</button>
				</div>
			</div>
				<div id="demo3" class="collapse">
				 	<table class="table table-sm table-bordered table-striped table-dark text-center">
				 		<thead>
				 			<th>ID</th>
				 			<th>CLUB</th>
				 			<th>OPCIONES</th>
				 			<th>ID</th>
				 			<th>PAIS</th>
				 			<th>OPCIONES</th>
				 		</thead><br>
				 		<!--CAMPO DE BUSQUEDA DE VER CLUBES DE UN PAIS-->
				 		<div class="container">
				 			<div class="row justify-content-center">				 			
				 			<form action="searchCountry.php" method="post">
				 				<input type="text" name="Id_Pais" list="country" placeholder="Id_Pais" required="">
	 							<datalist id="country">
 								<?php 
 									$query ="SELECT *FROM pais";
 									$resultado = mysqli_query($conexion,$query);
 									while ($fila = mysqli_fetch_array($resultado))
 									{	 										
 								?>	
	 								 <option><?php echo $fila ['Id_Pais']." ".$fila ['Nombre_Pais']; ?></option>
 								<?php } ?>
	 							</datalist>
	 							<button type="submit" class="btn-sm btn-primary"><i class="fas fa-search"></i></button>
				 			</form>
				 			</div>
				 		</div><br>
				 		<!-- FIN DE CAMPO DE BUSQUEDA DE VER CLUBES DE UN PAIS-->
				 		<tbody>
				 		<?php 
				 			$tabla = 
				 			"SELECT pais.Id_Pais, pais.Nombre_Pais, club.Id_Club, club.Nombre_Club
							FROM pais
							INNER JOIN club 
							ON pais.Id_Pais = club.Id_Pais";
				 			$query = mysqli_query($conexion,$tabla);

				 			while ($fila = mysqli_fetch_array($query))
				 			{ 						
				 		 ?>
				 			 <tr>
				 			 	<td><?php echo $fila ['Id_Club']; ?></td>
				 			 	<td><?php echo $fila ['Nombre_Club']; ?></td>
				 			 	<td>
				 			 		<a href='editarClub.php?Id_Club=<?php echo $fila ['Id_Club'] ?>' class='btn btn-warning'>
									<i class="fas fa-edit"></i>
									</a>
									<a href='eliminarClub.php?Id_Club=<?php echo $fila ['Id_Club'] ?>' class='btn btn-danger'>
									<i class="fas fa-trash"></i>
									</a>
								</td>
				 			 	<td><?php echo $fila ['Id_Pais']; ?></td>
				 			 	<td><?php echo $fila ['Nombre_Pais']; ?></td>
				 			 	<td>
				 			 		<a href='editarPais.php?Id_Pais=<?php echo $fila ['Id_Pais'] ?>' class='btn btn-warning'>
									<i class="fas fa-edit"></i>
									</a>
									<a href='eliminarPais.php?Id_Pais=<?php echo $fila ['Id_Pais'] ?>' class='btn btn-danger'>
									<i class="fas fa-trash"></i>
									</a>
								</td>
								
				 			 </tr>
				 		<?php } ?>
				 		</tbody>
				 	</table>
				 </div>
		</div>
 	</div>
 </div>
 <!-- FIN DE TABLA DE PAIS Y CLUB-->
<?php require_once "dependencias/cabecera/footer.php"; ?>
 <!------------------------------------------------ FIN DE ARCHIVO DE club.php --------------------------------------------------------->