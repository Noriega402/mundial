<!-------------------------------------------------------------------  INICIO DE ARCHIVO DE db.php -------------------------------------------------------------->
<?php 
	function conexion()
	{
		$conexion=mysqli_connect("localhost","root","");
		mysqli_select_db($conexion,"qatar") or die("Error al conectar a la DB");
		return $conexion;
	}
?>
<!-------------------------------------------------------------------  FIN DE ARCHIVO DE db.php -------------------------------------------------------------->