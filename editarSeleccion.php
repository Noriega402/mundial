<!-- INICIO DE ARCHIVO DE editarSeleccion.php-->
<?php 	
	require_once "dependencias/cabecera/header.php";
	require_once "dependencias.php";
	require_once "db.php";
	$conexion = conexion();
	if ($_GET["Id_Seleccion"]) 
	{
		$id = $_GET["Id_Seleccion"];
		$query = "SELECT *FROM seleccion WHERE Id_Seleccion = '$id'; ";
		$resultado = mysqli_query($conexion,$query);
		$fila = mysqli_fetch_array($resultado);	
	}	
?>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="card card-header bg-dark text-white"><h3>INGRESA EL NUEVO NOMBRE DE LAS SELECCION</h3></div>
				<div class="card card-body bg-secondary">
					<form action="actualizar.php" method="POST" >
						<div class="form-group">
							<input type="number" name="Id_Seleccion" value="<?php echo $fila ['Id_Seleccion'] ?>">
						</div>

						<div class="form-group">
							<input type="text" name="Nombre_Seleccion" value="<?php echo $fila ['Nombre_Seleccion'] ?>">
						</div>

						<div class="form-group">
							<input type="submit" name="enviar" value="EDITAR" class="btn btn-success">
						</div>
					</form>
				</div>
		</div>
	</div>
</div>
<?php require_once "dependencias/cabecera/footer.php"; ?>
<!-- FIN DE ARCHIVO DE editarSeleccion.php-->