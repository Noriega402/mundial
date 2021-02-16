<?php 
	require_once "db.php";
	$conexion = conexion();

	isset($_POST["Id_Seleccion"]);
	isset($_POST["Nombre_Seleccion"]);
	isset($_POST["Id_tecnico"]);
	isset($_POST["Nombre_tecnico"]);

	$Id_S = $_POST["Id_Seleccion"];
	$Name_S = $_POST["Nombre_Seleccion"];
	$Id_DT = $_POST ["Id_tecnico"];
	$Name_DT = $_POST ["Nombre_tecnico"];

	$query1 = "INSERT INTO tecnico VALUES ('$Id_DT','$Name_DT');";
	$query2 = "INSERT INTO seleccion VALUES ('$Id_S','$Name_S','$Id_DT');";
	mysqli_query($conexion,$query1);
	mysqli_query($conexion,$query2);

	echo 
	"<script>
		window.location = 'selecciones.php'
	</script>";
 ?>