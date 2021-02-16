<?php 
	require_once "dependencias/cabecera/header.php";
	require_once "dependencias.php";
	require_once "db.php";
	$conexion = conexion();

	isset($_POST["Edad"]);
	$age = $_POST["Edad"];
 ?>
 <div class="container" style="margin-top: 5%">
 	<a href="jugador.php" class="btn btn-danger btn-lg">REGRESAR <i class="fas fa-home"></i></a>
 </div>

 <div class="container letra" style="margin-top: 3%">
	<div class="row justify-content-center">
		<div class="col-8">
				<table class="table table-bordered table-striped table-dark">					
					<thead>
						<th>JUGADOR</th>
						<th>EDAD</th>
					</thead>
					<tbody>
						<?php 
							$tabla = 
							"SELECT jugador.Nombre_Jugador, jugador.Edad
							FROM jugador
							WHERE jugador.Edad = '$age';";
							$query = mysqli_query($conexion,$tabla);

							while ($fila = mysqli_fetch_array($query))
							{
						?>
						<tr>								
							<td><?php echo $fila ['Nombre_Jugador']; ?></td>
							<td><?php echo $fila ['Edad']; ?></td>
						</tr>
							<?php } ?>
					</tbody>
				</table>
		</div>
	</div>
</div>
<?php require_once "dependencias/cabecera/footer.php"; ?>