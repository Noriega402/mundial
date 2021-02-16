<?php 
	require_once "db.php";
	$conexion = conexion();

	isset($_POST["Id_Club"]);
	isset($_POST["Nombre_Club"]);
	isset($_POST["Id_Pais"]);

	$id_Club = $_POST["Id_Club"];
	$name_Club = $_POST["Nombre_Club"];
	$id_Pais = $_POST["Id_Pais"];

	$query = "INSERT INTO club VALUES ('$id_Club','$name_Club','$id_Pais');";
	mysqli_query($conexion,$query);
	
	echo 
	"<script>
		window.location = 'club.php'
	</script>";
 ?>