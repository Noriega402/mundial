<?php 
	require_once "db.php";
	$conexion = conexion();

	isset($_POST["Id_Jugador"]);
	isset($_POST["Nombre_Jugador"]);
	isset($_POST["Edad"]);
	isset($_POST["Dorsal"]);
	isset($_POST["Id_Posicion"]);
	isset($_POST["Id_Seleccion"]);
	isset($_POST["Id_Club"]);

	$id_jugador = $_POST["Id_Jugador"];
	$name_Jugador = $_POST["Nombre_Jugador"];
	$age = $_POST["Edad"];
	$dorsal = $_POST["Dorsal"];
	$id_posicion = $_POST["Id_Posicion"];
	$id_seleccion = $_POST["Id_Seleccion"];
	$id_club = $_POST["Id_Club"];

	$query1 = "INSERT INTO jugador VALUES ('$id_jugador','$name_Jugador','$age','$dorsal');";
	$query2 = "INSERT INTO asignacion_jugador VALUES ('$id_jugador','$id_jugador','$id_posicion','$id_seleccion','$id_club');";
	mysqli_query($conexion,$query1);
	mysqli_query($conexion,$query2);

	echo 
	"<script>
		window.location = 'jugador.php'
	</script>";

 ?>