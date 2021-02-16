<?php 
	require_once "dependencias/cabecera/header.php";
	require_once "dependencias.php";
	require_once "db.php";
	$conexion = conexion();
	isset($_POST["Dorsal"]);
	$dorsal = $_POST["Dorsal"];	
?>
<div class="container letra" style="margin-top: 3%">
 	<a href="jugador.php" class="btn btn-danger "><i class="fas fa-arrow-circle-left"></i> REGRESAR</a>
 </div>
 <div class="container" style="margin-top: 3%">
 	<div class="row justify-content-center">
 		<div class="col-6">
 			<table class="table table-sm table-bordered table-striped table-dark text-center">
				 <thead>
					<th>JUGADOR</th>
				 	<th>DORSAL</th>
				</thead>
				<tbody>
				<?php 
					$query =
					"SELECT jugador.Nombre_Jugador, jugador.Dorsal
					FROM jugador
					WHERE jugador.Dorsal = '$dorsal';";
					$resultado = mysqli_query($conexion,$query);
				 			
					while ($fila = mysqli_fetch_array($resultado))
					{ 						
				?>
					<tr>				 			 	
				 	 	<td><?php echo $fila ['Nombre_Jugador']; ?></td>
				 	 	<td><?php echo $fila ['Dorsal']; ?></td>								
				 	</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
 <?php require_once "dependencias/cabecera/footer.php"; ?>