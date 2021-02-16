<?php 
	require_once "db.php";
	$conexion = conexion();

if ($_GET["Id_Seleccion"]) 
{
	$variable = $_GET["Id_Seleccion"];
	$query = "DELETE FROM seleccion WHERE Id_Seleccion = '$variable'; ";
	mysqli_query($conexion,$query);
	
	echo 
	"<script>
		window.location = 'selecciones.php'
	</script>";
}

else
{
	echo "Error en la varible ";
}


 ?>