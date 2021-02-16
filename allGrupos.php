<!------------------------------------------------- INICIO DE ARCHIVO allGrupos.php -------------------------------------------->
<?php 
	require_once "dependencias/cabecera/header.php";
	require_once "dependencias.php";
	require_once "db.php";
	$conexion = conexion();
?>
<div class="container" style="margin-top: 5%">	
	<div class="row justify-content-center">
		<div class="col-2">
			 <a href="index.php" class="btn btn-danger btn-lg">MENU <i class="fas fa-home"></i></a>
		</div>
	</div>	
</div>	
<!---------------------------------------------------- INICIO DEL BOTON DEL GRUPO 1 ------------------------------------------------>
<div class="container letra" style="margin-top: 3%">	
	<div class="row justify-content-center">	
		<div class="col-6">			
			<div class="container">
				<div class="row justify-content-center">
					<?php 
						$nombre_Grupo = "SELECT *FROM grupo WHERE Id_Grupo = 1";
						$query = mysqli_query($conexion,$nombre_Grupo);

						while ($fila = mysqli_fetch_array($query))
						{		
					?> 
					<button data-toggle="collapse" data-target="#demo2" class="btn btn-success btn-outline-light btn-lg">
					<?php echo $fila["Nombre_Grupo"]; ?> <i class="fas fa-futbol"></i>
					</button>
				<?php } ?>
				</div>
			</div><br>
			<div id="demo2" class="collapse">
				<div class="container letra" style="margin-top: 5%">
 					<div class="row justify-content-center">
 						<div class="col-8"> 				
 							<div class="container">
 								<div class="row justify-content-center">
		 						<button data-toggle="collapse" data-target="#demo3" class="btn btn-primary btn-lg">
			 					AÑADIR  <i class="fas fa-plus-circle"></i>
			 					</button> 
	 						</div>
 						</div>
 		 			<div id="demo3" class="collapse"> 
	 	 				<div class="card card-header text-light bg-dark"><h3>AGREGAR SELECCION AL GRUPO</h3></div>
			 				<div class="card card-body">
		 						<form action="pruebaGrupos1.php" method="post">
		 							<div class="form-group">
 									<input type="text" name="Id_Seleccion" list="id_sele" placeholder="SELECCION"  required="">
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
	 								<div class="form-group">
 										<input  type="submit" class="btn btn-success" name="enviar" value="CREAR ">
 									</div>
 								</form>
 							</div> 					
	 				</div>
	 			</div>
 			</div>
		</div>
				<table class="table table-bordered table-striped table-dark text-center">
					<thead>							
						<th>EQUIPO</th>
						<th>PG</th>
						<th>PE</th>
						<th>PP</th>
						<th>Pts</th>
					</thead> 				
					<tbody>
						<?php 
					 		$tabla = 
					 		"SELECT seleccion.Nombre_Seleccion, grupo.Nombre_Grupo
							FROM seleccion
							INNER JOIN asignacion_grupo ON seleccion.Id_Seleccion = asignacion_grupo.Id_Seleccion
							INNER JOIN grupo ON asignacion_grupo.Id_Grupo = grupo.Id_Grupo
							WHERE grupo.Id_Grupo=1;";
					 		$query = mysqli_query($conexion,$tabla);

					 		while ($fila = mysqli_fetch_array($query))
					 		{				 			
					 	?>
						<tr>						
							<td><?php echo $fila ['Nombre_Seleccion'] ?> </td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!---------------------------------------------------- FIN DEL BOTON DEL GRUPO 1 ------------------------------------------------>

<!---------------------------------------------------- INICIO DEL BOTON DEL GRUPO 2 ------------------------------------------------>
<div class="container letra" style="margin-top: 3%">	
	<div class="row justify-content-center">	
		<div class="col-6">			
			<div class="container">
				<div class="row justify-content-center">
					<?php 
						$nombre_Grupo = "SELECT *FROM grupo WHERE Id_Grupo = 2";
						$query = mysqli_query($conexion,$nombre_Grupo);

						while ($fila = mysqli_fetch_array($query))
						{		
					?> 
					<button data-toggle="collapse" data-target="#demo4" class="btn btn-success btn-outline-light btn-lg">
					<?php echo $fila["Nombre_Grupo"]; ?> <i class="fas fa-futbol"></i>
					</button>
				<?php } ?>
				</div>
			</div><br>
			<div id="demo4" class="collapse">
				<div class="container letra" style="margin-top: 5%">
 					<div class="row justify-content-center">
 						<div class="col-8"> 				
 							<div class="container">
 								<div class="row justify-content-center">
		 						<button data-toggle="collapse" data-target="#demo5" class="btn btn-primary btn-lg">
			 					AÑADIR  <i class="fas fa-plus-circle"></i>
			 					</button> 
	 						</div>
 						</div>
 		 			<div id="demo5" class="collapse"> 
	 	 				<div class="card card-header text-light bg-dark"><h3>AGREGAR SELECCION AL GRUPO</h3></div>
			 				<div class="card card-body">
		 						<form action="pruebaGrupos2.php" method="post">
		 							<div class="form-group">
 									<input type="text" name="Id_Seleccion" list="id_sele" placeholder="SELECCION"  required="">
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
	 								<div class="form-group">
 										<input  type="submit" class="btn btn-success" name="enviar" value="CREAR ">
 									</div>
 								</form>
 							</div> 					
	 				</div>
	 			</div>
 			</div>
		</div>
				<table class="table table-bordered table-striped table-dark text-center">
					<thead>							
						<th>EQUIPO</th>
						<th>PG</th>
						<th>PE</th>
						<th>PP</th>
						<th>Pts</th>
					</thead> 				
					<tbody>
						<?php 
					 		$tabla = 
					 		"SELECT seleccion.Nombre_Seleccion, grupo.Nombre_Grupo
							FROM seleccion
							INNER JOIN asignacion_grupo ON seleccion.Id_Seleccion = asignacion_grupo.Id_Seleccion
							INNER JOIN grupo ON asignacion_grupo.Id_Grupo = grupo.Id_Grupo
							WHERE grupo.Id_Grupo=2;";
					 		$query = mysqli_query($conexion,$tabla);

					 		while ($fila = mysqli_fetch_array($query))
					 		{				 			
					 	?>
						<tr>						
							<td><?php echo $fila ['Nombre_Seleccion'] ?> </td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!---------------------------------------------------- FIN DEL BOTON DEL GRUPO 2 ------------------------------------------------>

<!---------------------------------------------------- INICIO DEL BOTON DEL GRUPO 3 ------------------------------------------------>
<div class="container letra" style="margin-top: 3%">	
	<div class="row justify-content-center">	
		<div class="col-6">			
			<div class="container">
				<div class="row justify-content-center">
					<?php 
						$nombre_Grupo = "SELECT *FROM grupo WHERE Id_Grupo = 3";
						$query = mysqli_query($conexion,$nombre_Grupo);

						while ($fila = mysqli_fetch_array($query))
						{		
					?> 
					<button data-toggle="collapse" data-target="#demo6" class="btn btn-success btn-outline-light btn-lg">
					<?php echo $fila["Nombre_Grupo"]; ?> <i class="fas fa-futbol"></i>
					</button>
				<?php } ?>
				</div>
			</div><br>
			<div id="demo6" class="collapse">
				<div class="container letra" style="margin-top: 5%">
 					<div class="row justify-content-center">
 						<div class="col-8"> 				
 							<div class="container">
 								<div class="row justify-content-center">
		 						<button data-toggle="collapse" data-target="#demo8" class="btn btn-primary btn-lg">
			 					AÑADIR  <i class="fas fa-plus-circle"></i>
			 					</button> 
	 						</div>
 						</div>
 		 			<div id="demo8" class="collapse"> 
	 	 				<div class="card card-header text-light bg-dark"><h3>AGREGAR SELECCION AL GRUPO</h3></div>
			 				<div class="card card-body">
		 						<form action="pruebaGrupos3.php" method="post">
		 							<div class="form-group">
 									<input type="text" name="Id_Seleccion" list="id_sele" placeholder="SELECCION"  required="">
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
	 								<div class="form-group">
 										<input  type="submit" class="btn btn-success" name="enviar" value="CREAR ">
 									</div>
 								</form>
 							</div> 					
	 				</div>
	 			</div>
 			</div>
		</div>
				<table class="table table-bordered table-striped table-dark text-center">
					<thead>							
						<th>EQUIPO</th>
						<th>PG</th>
						<th>PE</th>
						<th>PP</th>
						<th>Pts</th>
					</thead> 				
					<tbody>
						<?php 
					 		$tabla = 
					 		"SELECT seleccion.Nombre_Seleccion, grupo.Nombre_Grupo
							FROM seleccion
							INNER JOIN asignacion_grupo ON seleccion.Id_Seleccion = asignacion_grupo.Id_Seleccion
							INNER JOIN grupo ON asignacion_grupo.Id_Grupo = grupo.Id_Grupo
							WHERE grupo.Id_Grupo=3;";
					 		$query = mysqli_query($conexion,$tabla);

					 		while ($fila = mysqli_fetch_array($query))
					 		{				 			
					 	?>
						<tr>						
							<td><?php echo $fila ['Nombre_Seleccion'] ?> </td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!---------------------------------------------------- FIN DEL BOTON DEL GRUPO 3 ------------------------------------------------>

<!---------------------------------------------------- INICIO DEL BOTON DEL GRUPO 4 ------------------------------------------------>
<div class="container letra" style="margin-top: 3%">	
	<div class="row justify-content-center">	
		<div class="col-6">			
			<div class="container">
				<div class="row justify-content-center">
					<?php 
						$nombre_Grupo = "SELECT *FROM grupo WHERE Id_Grupo = 4";
						$query = mysqli_query($conexion,$nombre_Grupo);

						while ($fila = mysqli_fetch_array($query))
						{		
					?> 
					<button data-toggle="collapse" data-target="#demo9" class="btn btn-success btn-outline-light btn-lg">
					<?php echo $fila["Nombre_Grupo"]; ?> <i class="fas fa-futbol"></i>
					</button>
				<?php } ?>
				</div>
			</div><br>
			<div id="demo9" class="collapse">
				<div class="container letra" style="margin-top: 5%">
 					<div class="row justify-content-center">
 						<div class="col-8"> 				
 							<div class="container">
 								<div class="row justify-content-center">
		 						<button data-toggle="collapse" data-target="#demo10" class="btn btn-primary btn-lg">
			 					AÑADIR  <i class="fas fa-plus-circle"></i>
			 					</button> 
	 						</div>
 						</div>
 		 			<div id="demo10" class="collapse"> 
	 	 				<div class="card card-header text-light bg-dark"><h3>AGREGAR SELECCION AL GRUPO</h3></div>
			 				<div class="card card-body">
		 						<form action="pruebaGrupos4.php" method="post">
		 							<div class="form-group">
 									<input type="text" name="Id_Seleccion" list="id_sele" placeholder="SELECCION"  required="">
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
	 								<div class="form-group">
 										<input  type="submit" class="btn btn-success" name="enviar" value="CREAR ">
 									</div>
 								</form>
 							</div> 					
	 				</div>
	 			</div>
 			</div>
		</div>
				<table class="table table-bordered table-striped table-dark text-center">
					<thead>							
						<th>EQUIPO</th>
						<th>PG</th>
						<th>PE</th>
						<th>PP</th>
						<th>Pts</th>
					</thead> 				
					<tbody>
						<?php 
					 		$tabla = 
					 		"SELECT seleccion.Nombre_Seleccion, grupo.Nombre_Grupo
							FROM seleccion
							INNER JOIN asignacion_grupo ON seleccion.Id_Seleccion = asignacion_grupo.Id_Seleccion
							INNER JOIN grupo ON asignacion_grupo.Id_Grupo = grupo.Id_Grupo
							WHERE grupo.Id_Grupo=4;";
					 		$query = mysqli_query($conexion,$tabla);

					 		while ($fila = mysqli_fetch_array($query))
					 		{				 			
					 	?>
						<tr>						
							<td><?php echo $fila ['Nombre_Seleccion'] ?> </td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!---------------------------------------------------- FIN DEL BOTON DEL GRUPO 4 ------------------------------------------------>

<!---------------------------------------------------- INICIO DEL BOTON DEL GRUPO 5 ------------------------------------------------>
<div class="container letra" style="margin-top: 3%">	
	<div class="row justify-content-center">	
		<div class="col-6">			
			<div class="container">
				<div class="row justify-content-center">
					<?php 
						$nombre_Grupo = "SELECT *FROM grupo WHERE Id_Grupo = 5";
						$query = mysqli_query($conexion,$nombre_Grupo);

						while ($fila = mysqli_fetch_array($query))
						{		
					?> 
					<button data-toggle="collapse" data-target="#demo11" class="btn btn-success btn-outline-light btn-lg">
					<?php echo $fila["Nombre_Grupo"]; ?> <i class="fas fa-futbol"></i>
					</button>
				<?php } ?>
				</div>
			</div><br>
			<div id="demo11" class="collapse">
				<div class="container letra" style="margin-top: 5%">
 					<div class="row justify-content-center">
 						<div class="col-8"> 				
 							<div class="container">
 								<div class="row justify-content-center">
		 						<button data-toggle="collapse" data-target="#demo12" class="btn btn-primary btn-lg">
			 					AÑADIR  <i class="fas fa-plus-circle"></i>
			 					</button> 
	 						</div>
 						</div>
 		 			<div id="demo12" class="collapse"> 
	 	 				<div class="card card-header text-light bg-dark"><h3>AGREGAR SELECCION AL GRUPO</h3></div>
			 				<div class="card card-body">
		 						<form action="pruebaGrupos5.php" method="post">
		 							<div class="form-group">
 									<input type="text" name="Id_Seleccion" list="id_sele" placeholder="SELECCION"  required="">
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
	 								<div class="form-group">
 										<input  type="submit" class="btn btn-success" name="enviar" value="CREAR ">
 									</div>
 								</form>
 							</div> 					
	 				</div>
	 			</div>
 			</div>
		</div>
				<table class="table table-bordered table-striped table-dark text-center">
					<thead>							
						<th>EQUIPO</th>
						<th>PG</th>
						<th>PE</th>
						<th>PP</th>
						<th>Pts</th>
					</thead> 				
					<tbody>
						<?php 
					 		$tabla = 
					 		"SELECT seleccion.Nombre_Seleccion, grupo.Nombre_Grupo
							FROM seleccion
							INNER JOIN asignacion_grupo ON seleccion.Id_Seleccion = asignacion_grupo.Id_Seleccion
							INNER JOIN grupo ON asignacion_grupo.Id_Grupo = grupo.Id_Grupo
							WHERE grupo.Id_Grupo=5;";
					 		$query = mysqli_query($conexion,$tabla);

					 		while ($fila = mysqli_fetch_array($query))
					 		{				 			
					 	?>
						<tr>						
							<td><?php echo $fila ['Nombre_Seleccion'] ?> </td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!---------------------------------------------------- FIN DEL BOTON DEL GRUPO 5 ------------------------------------------------>

<!---------------------------------------------------- INICIO DEL BOTON DEL GRUPO 6 ------------------------------------------------>
<div class="container letra" style="margin-top: 3%">	
	<div class="row justify-content-center">	
		<div class="col-6">			
			<div class="container">
				<div class="row justify-content-center">
					<?php 
						$nombre_Grupo = "SELECT *FROM grupo WHERE Id_Grupo = 6";
						$query = mysqli_query($conexion,$nombre_Grupo);

						while ($fila = mysqli_fetch_array($query))
						{		
					?> 
					<button data-toggle="collapse" data-target="#demo13" class="btn btn-success btn-outline-light btn-lg">
					<?php echo $fila["Nombre_Grupo"]; ?> <i class="fas fa-futbol"></i>
					</button>
				<?php } ?>
				</div>
			</div><br>
			<div id="demo13" class="collapse">
				<div class="container letra" style="margin-top: 5%">
 					<div class="row justify-content-center">
 						<div class="col-8"> 				
 							<div class="container">
 								<div class="row justify-content-center">
		 						<button data-toggle="collapse" data-target="#demo14" class="btn btn-primary btn-lg">
			 					AÑADIR  <i class="fas fa-plus-circle"></i>
			 					</button> 
	 						</div>
 						</div>
 		 			<div id="demo14" class="collapse"> 
	 	 				<div class="card card-header text-light bg-dark"><h3>AGREGAR SELECCION AL GRUPO</h3></div>
			 				<div class="card card-body">
		 						<form action="pruebaGrupos6.php" method="post">
		 							<div class="form-group">
 									<input type="text" name="Id_Seleccion" list="id_sele" placeholder="SELECCION"  required="">
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
	 								<div class="form-group">
 										<input  type="submit" class="btn btn-success" name="enviar" value="CREAR ">
 									</div>
 								</form>
 							</div> 					
	 				</div>
	 			</div>
 			</div>
		</div>
				<table class="table table-bordered table-striped table-dark text-center">
					<thead>							
						<th>EQUIPO</th>
						<th>PG</th>
						<th>PE</th>
						<th>PP</th>
						<th>Pts</th>
					</thead> 				
					<tbody>
						<?php 
					 		$tabla = 
					 		"SELECT seleccion.Nombre_Seleccion, grupo.Nombre_Grupo
							FROM seleccion
							INNER JOIN asignacion_grupo ON seleccion.Id_Seleccion = asignacion_grupo.Id_Seleccion
							INNER JOIN grupo ON asignacion_grupo.Id_Grupo = grupo.Id_Grupo
							WHERE grupo.Id_Grupo=6;";
					 		$query = mysqli_query($conexion,$tabla);

					 		while ($fila = mysqli_fetch_array($query))
					 		{				 			
					 	?>
						<tr>						
							<td><?php echo $fila ['Nombre_Seleccion'] ?> </td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!---------------------------------------------------- FIN DEL BOTON DEL GRUPO 6 ------------------------------------------------>

<!---------------------------------------------------- INICIO DEL BOTON DEL GRUPO 7 ------------------------------------------------>
<div class="container letra" style="margin-top: 3%">	
	<div class="row justify-content-center">	
		<div class="col-6">			
			<div class="container">
				<div class="row justify-content-center">
					<?php 
						$nombre_Grupo = "SELECT *FROM grupo WHERE Id_Grupo = 7";
						$query = mysqli_query($conexion,$nombre_Grupo);

						while ($fila = mysqli_fetch_array($query))
						{		
					?> 
					<button data-toggle="collapse" data-target="#demo15" class="btn btn-success btn-outline-light btn-lg">
					<?php echo $fila["Nombre_Grupo"]; ?> <i class="fas fa-futbol"></i>
					</button>
				<?php } ?>
				</div>
			</div><br>
			<div id="demo15" class="collapse">
				<div class="container letra" style="margin-top: 5%">
 					<div class="row justify-content-center">
 						<div class="col-8"> 				
 							<div class="container">
 								<div class="row justify-content-center">
		 						<button data-toggle="collapse" data-target="#demo16" class="btn btn-primary btn-lg">
			 					AÑADIR  <i class="fas fa-plus-circle"></i>
			 					</button> 
	 						</div>
 						</div>
 		 			<div id="demo16" class="collapse"> 
	 	 				<div class="card card-header text-light bg-dark"><h3>AGREGAR SELECCION AL GRUPO</h3></div>
			 				<div class="card card-body">
		 						<form action="pruebaGrupos7.php" method="post">
		 							<div class="form-group">
 									<input type="text" name="Id_Seleccion" list="id_sele" placeholder="SELECCION"  required="">
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
	 								<div class="form-group">
 										<input  type="submit" class="btn btn-success" name="enviar" value="CREAR ">
 									</div>
 								</form>
 							</div> 					
	 				</div>
	 			</div>
 			</div>
		</div>
				<table class="table table-bordered table-striped table-dark text-center">
					<thead>							
						<th>EQUIPO</th>
						<th>PG</th>
						<th>PE</th>
						<th>PP</th>
						<th>Pts</th>
					</thead> 				
					<tbody>
						<?php 
					 		$tabla = 
					 		"SELECT seleccion.Nombre_Seleccion, grupo.Nombre_Grupo
							FROM seleccion
							INNER JOIN asignacion_grupo ON seleccion.Id_Seleccion = asignacion_grupo.Id_Seleccion
							INNER JOIN grupo ON asignacion_grupo.Id_Grupo = grupo.Id_Grupo
							WHERE grupo.Id_Grupo=7;";
					 		$query = mysqli_query($conexion,$tabla);

					 		while ($fila = mysqli_fetch_array($query))
					 		{				 			
					 	?>
						<tr>						
							<td><?php echo $fila ['Nombre_Seleccion'] ?> </td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!---------------------------------------------------- FIN DEL BOTON DEL GRUPO 7 ------------------------------------------------>

<!---------------------------------------------------- INICIO DEL BOTON DEL GRUPO 8 ------------------------------------------------>
<div class="container letra" style="margin-top: 3%">	
	<div class="row justify-content-center">	
		<div class="col-6">			
			<div class="container">
				<div class="row justify-content-center">
					<?php 
						$nombre_Grupo = "SELECT *FROM grupo WHERE Id_Grupo = 8";
						$query = mysqli_query($conexion,$nombre_Grupo);

						while ($fila = mysqli_fetch_array($query))
						{		
					?> 
					<button data-toggle="collapse" data-target="#demo20" class="btn btn-success btn-outline-light btn-lg">
					<?php echo $fila["Nombre_Grupo"]; ?> <i class="fas fa-futbol"></i>
					</button>
				<?php } ?>
				</div>
			</div><br>
			<div id="demo20" class="collapse">
				<div class="container letra" style="margin-top: 5%">
 					<div class="row justify-content-center">
 						<div class="col-8"> 				
 							<div class="container">
 								<div class="row justify-content-center">
		 						<button data-toggle="collapse" data-target="#demo21" class="btn btn-primary btn-lg">
			 					AÑADIR  <i class="fas fa-plus-circle"></i>
			 					</button> 
	 						</div>
 						</div>
 		 			<div id="demo21" class="collapse"> 
	 	 				<div class="card card-header text-light bg-dark"><h3>AGREGAR SELECCION AL GRUPO</h3></div>
			 				<div class="card card-body">
		 						<form action="pruebaGrupos8.php" method="post">
		 							<div class="form-group">
 									<input type="text" name="Id_Seleccion" list="id_sele" placeholder="SELECCION"  required="">
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
	 								<div class="form-group">
 										<input  type="submit" class="btn btn-success" name="enviar" value="CREAR ">
 									</div>
 								</form>
 							</div> 					
	 				</div>
	 			</div>
 			</div>
		</div>
			<table class="table table-bordered table-striped table-dark text-center">
				<thead>							
					<th>EQUIPO</th>
					<th>PG</th>
					<th>PE</th>
					<th>PP</th>
					<th>Pts</th>
				</thead> 				
				<tbody>
					<?php 
				 		$tabla = 
				 		"SELECT seleccion.Nombre_Seleccion, grupo.Nombre_Grupo
						FROM seleccion
						INNER JOIN asignacion_grupo ON seleccion.Id_Seleccion = asignacion_grupo.Id_Seleccion
						INNER JOIN grupo ON asignacion_grupo.Id_Grupo = grupo.Id_Grupo
						WHERE grupo.Id_Grupo=8;";
				 		$query = mysqli_query($conexion,$tabla);

				 		while ($fila = mysqli_fetch_array($query))
				 		{				 			
				 	?>
					<tr>						
						<td><?php echo $fila ['Nombre_Seleccion'] ?> </td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					
					<?php } ?>
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>
<!---------------------------------------------------- FIN DEL BOTON DEL GRUPO 8 ------------------------------------------------>
<?php require_once "dependencias/cabecera/footer.php"; ?>
<!------------------------------------------------- FIN DE ARCHIVO allGrupos.php -------------------------------------------->