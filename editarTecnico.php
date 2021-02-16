<!-- INICIO DE ARCHIVO DE editarTecnico.php-->
<?php 	
	require_once "dependencias/cabecera/header.php";
	require_once "dependencias.php";
	require_once "db.php";
	$conexion = conexion();
	if ($_GET["Id_tecnico"]) 
	{
		$id = $_GET["Id_tecnico"];
		$query = "SELECT *FROM tecnico WHERE Id_DT = '$id'; ";
		$resultado = mysqli_query($conexion,$query);
		$fila = mysqli_fetch_array($resultado);	
	}	
?>
<div class="container letra">
	<div class="row">
		<div class="col-md-6">
			<div class="card card-header bg-dark text-white"><h3>INGRESA EL NUEVO NOMBRE DE LAS SELECCION</h3></div>
				<div class="card card-body bg-secondary">
					<!-- INICIO DE FORMULARIO PARA ACTUALIZAR AL DT-->
					<form action="actualizarDT.php" method="POST" >
						<div class="form-group">
							<input type="number" name="Id_Tecnico" value="<?php echo $fila ['Id_DT'] ?>">
						</div>

						<div class="form-group">
							<input type="text" name="Nombre_Tecnico" value="<?php echo $fila ['Nombre_DT'] ?>">
						</div>

						<div class="form-group">
							<input type="submit" name="enviar" value="EDITAR" class="btn btn-success">
						</div>
					</form>
					<!-- FIN DE FORMULARIO PARA ACTUALIZAR AL DT-->
				</div>
		</div>
	</div>
</div>
<?php require_once "dependencias/cabecera/footer.php"; ?>
<!-- FIN DE ARCHIVO DE editarSeleccion.php-->