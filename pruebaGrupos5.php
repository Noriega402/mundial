<?php 
	require_once "db.php";
	$conexion = conexion();

	isset($_POST["Id_Seleccion"]);

	$id = $_POST["Id_Seleccion"];

	$query = "INSERT INTO asignacion_grupo(Id_Grupo,Id_Seleccion) VALUES (5,'$id');
	";

	$resultado = mysqli_query($conexion,$query);

	echo 
	"<script>
		window.location = 'allGrupos.php';
	</script>";
 ?>