<!--ARCHIVO DE searchPosicion.php-->
<?php 
	require_once "dependencias/cabecera/header.php";
	require_once "dependencias.php";
	require_once "db.php";
	$conexion = conexion();

	isset($_POST["Id_Posicion"]);
	$id = $_POST["Id_Posicion"];

		
 ?>
 <div class="container letra" style="margin-top: 3%">
 	<a href="jugador.php" class="btn btn-danger"><i class="fas fa-arrow-circle-left"></i> REGRESAR</a>
 </div>
 <div class="container" style="margin-top: 3%">
 	<div class="row justify-content-center">
 		<div class="col-8">
 			<table class="table table-sm table-bordered table-striped table-dark text-center">
				<thead>
					<th>JUGADOR</th>
				 	<th>POSICION</th>
				</thead>
				<tbody>
				<?php 
					$tabla = 
					"SELECT jugador.Nombre_Jugador, posicion.Descripcion_Posicion
					FROM jugador
					INNER JOIN asignacion_jugador ON jugador.Id_Jugador = asignacion_jugador.Id_Jugador
					INNER JOIN posicion ON asignacion_jugador.Id_Posicion = posicion.Id_Posicion
					WHERE posicion.Id_Posicion = '$id';";
					$query = mysqli_query($conexion,$tabla);

					while ($fila = mysqli_fetch_array($query))
					{ 						
				?>
					<tr>
					 	<td><?php echo $fila ['Nombre_Jugador']; ?></td>
					 	<td><?php echo $fila ['Descripcion_Posicion']; ?></td>								
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php require_once "dependencias/cabecera/footer.php"; ?>
<!--FIN DE ARCHIVO DE searchPosicion.php-->