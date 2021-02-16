<?php 
	require_once "db.php";
	$conexion = conexion();

	isset($_POST["Id_Club"]);
	isset($_POST["Nombre_Club"]);

	$id_Club = $_POST["Id_Club"];
	$name_Club = $_POST["Nombre_Club"];
	$query = "UPDATE club SET Nombre_Club = '$name_Club' WHERE Id_Club = '$id_Club'";
	mysqli_query($conexion,$query);
	echo 
	"<script>
		window.location = 'club.php'
	</script>";

 ?>