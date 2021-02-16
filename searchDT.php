<!--ARCHIVO DE searchDT.php-->
<?php 
	require_once "dependencias/cabecera/header.php";
	require_once "dependencias.php";
	require_once "db.php";
	$conexion = conexion();

	isset($_POST["Id_Tecnico"]);
	$id = $_POST["Id_Tecnico"];

		
 ?>
 <div class="container letra" style="margin-top: 3%">
 	<a href="selecciones.php" class="btn btn-danger"><i class="fas fa-arrow-circle-left"></i> REGRESAR</a>
 </div>
 <div class="container" style="margin-top: 3%">
 	<div class="row justify-content-center">
 		<div class="col-8">
 			<table class="table table-sm table-bordered table-striped table-dark text-center">
				 		<thead>
				 			<th>DT</th>
				 			<th>SELECCION</th>
				 		</thead>
				 		<tbody>
				 		<?php 
						$tabla = 
				 			"SELECT seleccion.Nombre_Seleccion, tecnico.Nombre_DT
							FROM seleccion
							INNER JOIN tecnico ON tecnico.Id_DT = seleccion.Id_DT
							WHERE seleccion.Id_DT = '$id'";
				 			$query = mysqli_query($conexion,$tabla);

				 			while ($fila = mysqli_fetch_array($query))
				 			{ 						
				 		 ?>
				 			 <tr>				 			 	
				 			 	<td><?php echo $fila ['Nombre_DT']; ?></td>								
				 			 	<td><?php echo $fila ['Nombre_Seleccion']; ?></td>
				 			 </tr>
				 		 <?php } ?>
				 		</tbody>
			</table>
		</div>
	</div>
</div>
<?php require_once "dependencias/cabecera/footer.php"; ?>
<!--FIN DE ARCHIVO DE searchDT.php-->