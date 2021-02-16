<!------------------------------------------------- INICIO DE ARCHIVO DE selecciones.php -------------------------------------------->
<?php 
	require_once "dependencias/cabecera/header.php";
	require_once "dependencias.php";
	require_once "db.php";
	$conexion = conexion();
 ?>
 <div class="container letra" style="margin-top: 5%">
 	<div class="row justify-content-center">
 		<div class="col-4">
 			<div class="container">
	 			<button data-toggle="collapse" data-target="#demo1" class="btn btn-primary btn-lg">
	 			NUEVO  <i class="fas fa-plus-circle"></i>
	 			</button>
 				<a href="index.php" class="btn btn-danger btn-lg">MENU <i class="fas fa-home"></i></a>
 			</div>
 			<!--------------- INICIO DE FORMULARIO PARA CREAR LA SELECCION --------------------->
 		 		<div id="demo1" class="collapse"> 
	 	 			<div class="card card-header text-light bg-dark"><h3>CREAR NUEVA SELECCION</h3></div>
			 			<div class="card card-body">
		 					<form action="nuevaSeleccion.php" method="post">
		 						<div class="form-group">
		 							<input type="number" name="Id_Seleccion" placeholder="Id_Seleccion" autofocus required="">
		 						</div>

 								<div class="form-group">
 									<input type="text" name="Nombre_Seleccion" placeholder="Nombre_Seleccion" required="">
 								</div>

	 							<div class="form-group">
	 								<input type="number" name="Id_tecnico" placeholder="Id_Tecnico" required="">
 								</div>

 								<div class="form-group">
 									<input type="text" name="Nombre_tecnico" placeholder="Nombre_tecnico" required="">
 								</div>

 								<div class="form-group">
 									<input  type="submit" class="btn btn-success" name="enviar" value="CREAR ">
 								</div>
 							</form>
 						</div> 					
	 			</div>
	 		<!-------------- FIN DE FORMULARIO PARA CREAR LA SELECCION -------------------->
	 	</div>
 	</div>
</div>
<!--------------------------- INICIO DE LA TABLA DE SELECCIONES ----------------------->
<div class="container letra" style="margin-top: 3%">	
	<div class="row justify-content-center">	
		<div class="col-5">
			<div class="container">
				<div class="row justify-content-center">
					<button data-toggle="collapse" data-target="#demo2" class="btn btn-success btn-outline-light btn-lg">
					SELECCION <i class="fas fa-futbol"></i>
					</button> 				
				</div>
			</div><br>
			 <div id="demo2" class="collapse"> 
				<table class="table table-bordered table-striped table-dark text-center">
					<thead>		
						<th>ID</th>					
						<th>SELECCION</th>
						<th>OPCIONES</th>
					</thead> 
					<!------------------ INICIO DE CUERPO DE LA TABLA DE SELECCION ---------------->
					<tbody>
				 	<?php 
				 		$tabla = 
				 		"SELECT *FROM seleccion;";
				 		$query = mysqli_query($conexion,$tabla);

				 		while ($fila = mysqli_fetch_array($query))
				 		{				 			
				 	?>
					<tr>						
						<td><?php echo $fila ['Id_Seleccion'] ?> </td>
						<td><?php echo $fila ['Nombre_Seleccion'] ?> </td>
						<td>
							<a href='editarSeleccion.php?Id_Seleccion=<?php echo $fila ['Id_Seleccion'] ?>' class='btn btn-warning'>
							<i class="fas fa-edit"></i>
							</a>
							<a href='eliminarSeleccion.php?Id_Seleccion=<?php echo $fila ['Id_Seleccion'] ?>' class='btn btn-danger'>
							<i class="fas fa-trash"></i>
							</a>
						</td>
					</tr>
					
					<?php } ?>
						
					</tbody>
					<!--------------- FIN DE CUERPO DE LA TABLA DE SELECCION ------------->
				</table>
			</div>
		</div>
	</div>
</div>
<!-------------------- FIN DE LA TABLA DE SELECCIONES ---------------->

<!----------------------------- INICIO DE LA TABLA DE DT ----------------------->
<div class="container letra" style="margin-top: 3%">	
	<div class="row justify-content-center">	
		<div class="col-5">
			<div class="container">
				<div class="row justify-content-center">
					<button data-toggle="collapse" data-target="#demo3" class="btn btn-success btn-outline-light btn-lg">
					DT <i class="fas fa-futbol"></i>
					</button> 				
				</div>
			</div><br>
			 <div id="demo3" class="collapse"> 
				<table class="table table-bordered table-striped table-dark text-center">
					<thead>	
						<th>ID</th>			
						<th>DT</th>
						<th>OPCIONES</th>
					</thead> 				
					<tbody>
				 	<?php 
				 		$tabla = 
				 		"SELECT *FROM tecnico;";
				 		$query = mysqli_query($conexion,$tabla);

				 		while ($fila = mysqli_fetch_array($query))
				 		{				 			
				 	?>
					<tr>
						<td><?php echo $fila ['Id_DT'] ?> </td>
						<td><?php echo $fila ['Nombre_DT'] ?> </td>
						<td>
							<a href='editarTecnico.php?Id_tecnico=<?php echo $fila ['Id_DT'] ?>' class='btn btn-warning'>
							<i class="fas fa-edit"></i>
							</a>
							<a href='eliminarTecnico.php?Id_tecnico=<?php echo $fila ['Id_DT'] ?>' class='btn btn-danger'>
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
<!------------------------------------------------------- FIN DE LA TABLA DE DT ---------------------------------------------------->

<!------------------------------------------------- INICIO DE LA TABLA DE SELECCIONES Y DT ------------------------------------------>
<div class="container letra" style="margin-top: 3%">	
	<div class="row">	
		<div class="col-12">
			<div class="container">
				<div class="row justify-content-center">
					<button data-toggle="collapse" data-target="#demo4" class="btn btn-success btn-outline-light btn-lg">
					SELECCION Y DT  <i class="fas fa-futbol"></i>
					</button> 				
				</div>
			</div>
			 	<div id="demo4" class="collapse"> 
					<table class="table table-bordered table-striped table-dark text-center">
						<thead>						
							<th>SELECCION</th>										
							<th>DT</th>					
						</thead><br>
						<!----------------------------------- INICIO DE CONTENEDOR DE CAMPOS DE BUSQUEDA ------------------------------>
						<div class="container">
						<div class="row justify-content-center">
						<!------------------------------------ CAMPO DE BUSQUEDA DE LA SELECCION ------------------------------------->
						<form action="searchSeleccion.php" method="post">
				 			<input type="text" name="Id_Seleccion" list="seleccion" placeholder="BUSCAR SELECCION" required="">
	 						<datalist id="seleccion">
 							<?php 
 								$query ="SELECT *FROM seleccion";
 								$resultado = mysqli_query($conexion,$query);
 								while ($fila = mysqli_fetch_array($resultado))
 								{	 										
 							?>	
	 							 <option><?php echo $fila ['Id_Seleccion']." ".$fila ['Nombre_Seleccion']; ?></option>
 							<?php } ?>
	 						</datalist>
	 						<button type="submit" class="btn-sm btn-primary"><i class="fas fa-search"></i></button>
				 		</form>
				 		<!----------------------------------- FIN DEL CAMPO DE BUSQUEDA DE LA SELECCION -------------------------------->

						<!------------------------------------- CAMPO DE BUSQUEDA DEL DT ----------------------------------------------->
				 		<form action="searchDT.php" method="post">				 			
				 			<input type="text" name="Id_Tecnico" list="DT" placeholder="BUSCAR DT" required="">
	 						<datalist id="DT">
 							<?php 
 								$query ="SELECT *FROM tecnico";
 								$resultado = mysqli_query($conexion,$query);
 								while ($fila = mysqli_fetch_array($resultado))
 								{	 										
 							?>	
	 							 <option><?php echo $fila ['Id_DT']." ".$fila ['Nombre_DT']; ?></option>
 							<?php } ?>
	 						</datalist>
	 						<button type="submit" class="btn-sm btn-primary"><i class="fas fa-search"></i></button>
				 		</form>
				 		<!-------------------------------------------- FIN DEL CAMPO DE BUSQUEDA DEL DT ---------------------------------->
				 		</div>
				 	</div><br>
				 	<!------------------------------------- FIN DE CONTENEDOR DE CAMPOS DE BUSQUEDA --------------------------------->

				 	<!--------------------------------- INICIO DE CUERPO DE LA TABLA DE SELECCION Y DT --------------------------------->
						<tbody>
					 		<?php 
					 			$tabla = 
					 			"SELECT seleccion.Id_Seleccion, seleccion.Nombre_Seleccion, tecnico.Id_DT, tecnico.Nombre_DT
					 			FROM seleccion
								INNER JOIN tecnico 
								ON seleccion.Id_DT = tecnico.Id_DT;";
					 			$query = mysqli_query($conexion,$tabla);

					 			while ($fila = mysqli_fetch_array($query))
					 			{				 			
					 		?>
							<tr>								
								<td><?php echo $fila ['Nombre_Seleccion'] ?> </td>								
								<td><?php echo $fila ['Nombre_DT'] ?> </td>								
							</tr>
							
							<?php } ?>
							
						</tbody>
					<!--------------------------------- FIN DE CUERPO DE LA TABLE DE SELECCION Y DT --------------------------------->
					</table>
				</div>
		</div>
	</div>
</div>
<!------------------------------------------------------- FIN DE LA TABLA DE SELECCION Y DT ------------------------------------------->
<?php require_once "dependencias/cabecera/footer.php"; ?>
<!------------------------------------------------- FIN DE ARCHIVO DE selecciones.php -------------------------------------------->