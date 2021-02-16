<!-- INICIO DE ARCHIVO DE actualizar.php-->
<?php 
	require_once "db.php";
	$conexion = conexion();

	isset($_POST["Id_Seleccion"]);
	isset($_POST["Nombre_Seleccion"]);

	$id_Seleccion = $_POST["Id_Seleccion"];
	$name_Seleccion = $_POST["Nombre_Seleccion"];
	$query = "UPDATE seleccion SET Nombre_Seleccion = '$name_Seleccion' WHERE Id_Seleccion = '$id_Seleccion'";
	mysqli_query($conexion,$query);
	echo 
	"<script>
		window.location = 'selecciones.php'
	</script>";
 ?>
 <!-- FIN DE ARCHIVO DE actualizar.php-->