<?php 
	require_once "dependencias/cabecera/header.php";
	require_once "dependencias.php";
	require_once "db.php";
	$conexion = conexion();
	if ($_GET["Id_Club"])
	{
		$id_Club = $_GET["Id_Club"];
		$query = "SELECT * FROM club WHERE Id_Club = '$id_Club';";
		$resultado = mysqli_query($conexion,$query);
		$fila = mysqli_fetch_array($resultado);
	}
 ?>
 <div class="container">
 	<div class="row">
 		<div class="col-6">
 			<div class="card card-header bg-dark text-white"><h3>INGRESA EL NUEVO NOMBRE DEL CLUB</h3></div>
 				<div class="card card-body">
 					<form action="actualizarClub.php" method="post">
 						<div class="form-group">
 							<input type="number" name="Id_Club" value="<?php echo $fila ['Id_Club'] ?>" >
 						</div>
 						<div class="form-group">
 							<input type="text" name="Nombre_Club" value="<?php echo $fila ['Nombre_Club'] ?>">
 						</div>
 						<div class="form-group">
 							<input type="submit" class="btn btn-success" name="enviar" value="EDITAR">
 						</div>
 					</form>
 				</div>
 		</div>
 	</div>
 </div>
 <?php require_once "dependencias/cabecera/footer.php"; ?>