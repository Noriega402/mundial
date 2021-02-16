<!-- INICIO DE ARCHIVO DE actualizarDT.php-->
<?php 
	require_once "db.php";
	$conexion = conexion();

	isset($_POST["Id_Tecnico"]);
	isset($_POST["Nombre_Tecnico"]);

	$id = $_POST["Id_Tecnico"];
	$name_DT = $_POST["Nombre_Tecnico"];
	$query = "UPDATE tecnico SET Nombre_DT = '$name_DT' WHERE Id_DT = '$id'";
	mysqli_query($conexion,$query);
	echo 
	"<script>
		window.location = 'selecciones.php'
	</script>";
 ?>
<!-- FIN DE ARCHIVO DE actualizarDT.php-->