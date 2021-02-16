<?php 
	require_once "dependencias/cabecera/header.php";
	require_once "dependencias.php";
	require_once "db.php";
	$conexion = conexion();

	isset($_POST["Id_Pais"]);
	$id = $_POST["Id_Pais"];

		
 ?>
 <div class="container letra" style="margin-top: 3%">
 	<a href="club.php" class="btn btn-danger"><i class="fas fa-arrow-circle-left"></i> REGRESAR</a>
 </div>
 <div class="container" style="margin-top: 3%">
 	<div class="row justify-content-center text-center">
 		<div class="col-8">
 			<table class="table table-sm table-bordered table-striped table-dark ">
				 		<thead>
				 			<th>ID</th>
				 			<th>CLUB</th>
				 			<th>PAIS</th>
				 		</thead>
				 		<tbody>
				 		<?php 
						$tabla = 
				 			"SELECT pais.Nombre_Pais, club.Nombre_Club, club.Id_Club
							FROM pais
							INNER JOIN club ON pais.Id_Pais = club.Id_Pais
							WHERE pais.Id_Pais = '$id'";
				 			$query = mysqli_query($conexion,$tabla);

				 			while ($fila = mysqli_fetch_array($query))
				 			{ 						
				 		 ?>
				 			 <tr>	
				 			 	<td><?php echo $fila['Id_Club']; ?></td>			 			 	
				 			 	<td><?php echo $fila ['Nombre_Club']; ?></td>
				 			 	<td><?php echo $fila ['Nombre_Pais']; ?></td>								
				 			 </tr>
				 		 <?php } ?>
				 		</tbody>
			</table>
		</div>
	</div>
</div>
<?php require_once "dependencias/cabecera/footer.php"; ?>