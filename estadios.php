<?php 
	require_once "dependencias/cabecera/header.php";
	require_once "dependencias.php";
	require_once "db.php";
	$conexion = conexion();
 ?>
 <div class="container-fluid letra">
 	<div class="row">
 		<div class="col-md-12" align="center" style="margin-top: 2%">
		 	<div id="demo" class="carousel slide" data-ride="carousel">
		 		<!-------------------------------------------------------- INDICADORES -------------------------------------------->
			 		<ul class="carousel-indicators">
			 			<li data-target="demo" data-slide-to="0" class="active"></li>
			 			<li data-target="demo" data-slide-to="1"></li>
			 			<li data-target="demo" data-slide-to="2"></li>
			 			<li data-target="demo" data-slide-to="3"></li>
			 			<li data-target="demo" data-slide-to="4"></li>
			 			<li data-target="demo" data-slide-to="5"></li>
			 			<li data-target="demo" data-slide-to="6"></li>
			 			<li data-target="demo" data-slide-to="7"></li>
			 			<li data-target="demo" data-slide-to="8"></li>
			 			<li data-target="demo" data-slide-to="9"></li>
			 			<li data-target="demo" data-slide-to="10"></li>
			 			<li data-target="demo" data-slide-to="11"></li>
			 			<li data-target="demo" data-slide-to="12"></li>
			 		</ul>

			 		<!--------------------------------------------- IMAGENES ------------------------------------------------------>

			 		<div class="carousel-inner letra"> 

			 			<div class="carousel-item active">
			 				<img src="dependencias/boostrap/img/estadio1.jpg" class="img-fluid" style=" width: 70%" >
			 				<div class="carousel-caption">
			 				<?php 
			 					$name = "SELECT *FROM estadio WHERE Id_Estadio = 1";
			 					$query = mysqli_query($conexion,$name);
			 					while($fila = mysqli_fetch_array($query))
			 					{
			 				?>
			 					<div class="row justify-content-center">
			 						<div class="col-6">
				 						<h4 class="bg-light text-dark"><?php echo $fila['Nombre_Estadio']; ?></h4>
				 						<h4 class="bg-light text-dark"><?php echo "Capacidad de: ".$fila['Capacidad']; ?></h4>
			 				<?php } ?>
			 						</div>
			 					</div>
			 				</div>
			 			</div>
			 		
			 			<div class="carousel-item">
			 				<img src="dependencias/boostrap/img/estadio2.jpg"class="img-fluid" style="width: 65%">
			 				<div class="carousel-caption">
			 				<?php 
			 					$name = "SELECT *FROM estadio WHERE Id_Estadio = 2";
			 					$query = mysqli_query($conexion,$name);
			 					while($fila = mysqli_fetch_array($query))
			 					{
			 				?>
			 					<div class="row justify-content-center">
			 						<div class="col-6">
				 						<h4 class="bg-light text-dark"><?php echo $fila['Nombre_Estadio']; ?></h4>
				 						<h4 class="bg-light text-dark"><?php echo "Capacidad de: ".$fila['Capacidad']; ?></h4>
			 				<?php } ?>
			 						</div>
			 					</div>			 				
			 				</div>				 				
			 			</div>					 				
			 					 	
			 			<div class="carousel-item">
			 				<img src="dependencias/boostrap/img/estadio3.jpg" class="img-fluid" style=" width: 95%">
			 				<div class="carousel-caption">
			 				<?php 
			 					$name = "SELECT *FROM estadio WHERE Id_Estadio = 3";
			 					$query = mysqli_query($conexion,$name);
			 					while($fila = mysqli_fetch_array($query))
			 					{
			 				?>
			 					<div class="row justify-content-center">
			 						<div class="col-6">
				 						<h4 class="bg-light text-dark"><?php echo $fila['Nombre_Estadio']; ?></h4>
				 						<h4 class="bg-light text-dark"><?php echo "Capacidad de: ".$fila['Capacidad']; ?></h4>
			 				<?php } ?>
			 						</div>
			 					</div>
			 				</div>
			 			</div>
			 					 	
			 			<div class="carousel-item">
			 				<img src="dependencias/boostrap/img/estadio4.jpg"class="img-fluid"style="width: 80%" >
			 				<div class="carousel-caption">
							<?php 
			 					$name = "SELECT *FROM estadio WHERE Id_Estadio = 4";
			 					$query = mysqli_query($conexion,$name);
			 					while($fila = mysqli_fetch_array($query))
			 					{
			 				?>
			 					<div class="row justify-content-center">
			 						<div class="col-6">
				 						<h4 class="bg-light text-dark"><?php echo $fila['Nombre_Estadio']; ?></h4>
				 						<h4 class="bg-light text-dark"><?php echo "Capacidad de: ".$fila['Capacidad']; ?></h4>
			 				<?php } ?>
			 						</div>
			 					</div>
			 				</div>
			 			</div>
						 		
			 			<div class="carousel-item">
			 				<img src="dependencias/boostrap/img/estadio5.jpg" class="img-fluid"style="width: 70%">
			 				<div class="carousel-caption">
							<?php 
			 					$name = "SELECT *FROM estadio WHERE Id_Estadio = 5";
			 					$query = mysqli_query($conexion,$name);
			 					while($fila = mysqli_fetch_array($query))
			 					{
			 				?>
			 					<div class="row justify-content-center">
			 						<div class="col-6">
				 						<h4 class="bg-light text-dark"><?php echo $fila['Nombre_Estadio']; ?></h4>
				 						<h4 class="bg-light text-dark"><?php echo "Capacidad de: ".$fila['Capacidad']; ?></h4>
			 				<?php } ?>
			 						</div>
			 					</div>
			 				</div>
			 			</div>
						 		
			 			<div class="carousel-item">
			 				<img src="dependencias/boostrap/img/estadio6.jpg"class="img-fluid" style="width: 70%">
			 				<div class="carousel-caption">
			 				<?php 
			 					$name = "SELECT *FROM estadio WHERE Id_Estadio = 6";
			 					$query = mysqli_query($conexion,$name);
			 					while($fila = mysqli_fetch_array($query))
			 					{
			 				?>
			 					<div class="row justify-content-center">
			 						<div class="col-6">
				 						<h4 class="bg-light text-dark"><?php echo $fila['Nombre_Estadio']; ?></h4>
				 						<h4 class="bg-light text-dark"><?php echo "Capacidad de: ".$fila['Capacidad']; ?></h4>
			 				<?php } ?>
			 						</div>
			 					</div>
			 				</div>
			 			</div>
			 			 		
			 			<div class="carousel-item">
			 				<img src="dependencias/boostrap/img/estadio7.jpg"class="img-fluid" style=" width: 50%">
			 				<div class="carousel-caption">
			 				<?php 
			 					$name = "SELECT *FROM estadio WHERE Id_Estadio = 7";
			 					$query = mysqli_query($conexion,$name);
			 					while($fila = mysqli_fetch_array($query))
			 					{
			 				?>
			 					<div class="row justify-content-center">
			 						<div class="col-6">
				 						<h4 class="bg-light text-dark"><?php echo $fila['Nombre_Estadio']; ?></h4>
				 						<h4 class="bg-light text-dark"><?php echo "Capacidad de: ".$fila['Capacidad']; ?></h4>
			 				<?php } ?>
			 						</div>
			 					</div>
			 				</div>
			 			</div>
			 				 	
			 			<div class="carousel-item">
			 				<img src="dependencias/boostrap/img/estadio8.jpg"class="img-fluid"style="width: 60%" >
			 				<div class="carousel-caption">
			 				<?php 
			 					$name = "SELECT *FROM estadio WHERE Id_Estadio = 8";
			 					$query = mysqli_query($conexion,$name);
			 					while($fila = mysqli_fetch_array($query))
			 					{
			 				?>
			 					<div class="row justify-content-center">
			 						<div class="col-6">
				 						<h4 class="bg-light text-dark"><?php echo $fila['Nombre_Estadio']; ?></h4>
				 						<h4 class="bg-light text-dark"><?php echo "Capacidad de: ".$fila['Capacidad']; ?></h4>
			 				<?php } ?>
			 						</div>
			 					</div>
			 				</div>
			 			</div>
						 	
			 			<div class="carousel-item">
			 				<img src="dependencias/boostrap/img/estadio9.jpeg"class="img-fluid" style="width: 70%">
			 				<div class="carousel-caption">
			 				<?php 
			 					$name = "SELECT *FROM estadio WHERE Id_Estadio = 9";
			 					$query = mysqli_query($conexion,$name);
			 					while($fila = mysqli_fetch_array($query))
			 					{
			 				?>
			 					<div class="row justify-content-center">
			 						<div class="col-6">
				 						<h4 class="bg-light text-dark"><?php echo $fila['Nombre_Estadio']; ?></h4>
				 						<h4 class="bg-light text-dark"><?php echo "Capacidad de: ".$fila['Capacidad']; ?></h4>
			 				<?php } ?>
			 						</div>
			 					</div>
			 				</div>
			 			</div>

			 			<div class="carousel-item">
			 				<img src="dependencias/boostrap/img/estadio10.jpg"class="img-fluid" style="width: 70%">
			 				<div class="carousel-caption">
			 				<?php 
			 					$name = "SELECT *FROM estadio WHERE Id_Estadio = 10";
			 					$query = mysqli_query($conexion,$name);
			 					while($fila = mysqli_fetch_array($query))
			 					{
			 				?>
			 					<div class="row justify-content-center">
			 						<div class="col-6">
				 						<h4 class="bg-light text-dark"><?php echo $fila['Nombre_Estadio']; ?></h4>
				 						<h4 class="bg-light text-dark"><?php echo "Capacidad de: ".$fila['Capacidad']; ?></h4>
			 				<?php } ?>
			 						</div>
			 					</div>
			 				</div>
			 			</div> 		
			 			 		
			 			<div class="carousel-item">
			 				<img src="dependencias/boostrap/img/estadio11.jpg"class="img-fluid" style="width: 70%" >
			 				<div class="carousel-caption">
			 				<?php 
			 					$name = "SELECT *FROM estadio WHERE Id_Estadio = 11";
			 					$query = mysqli_query($conexion,$name);
			 					while($fila = mysqli_fetch_array($query))
			 					{
			 				?>
			 					<div class="row justify-content-center">
			 						<div class="col-6">
				 						<h4 class="bg-light text-dark"><?php echo $fila['Nombre_Estadio']; ?></h4>
				 						<h4 class="bg-light text-dark"><?php echo "Capacidad de: ".$fila['Capacidad']; ?></h4>
			 				<?php } ?>
			 						</div>
			 					</div>
			 				</div>
			 			</div>
						 		
			 			<div class="carousel-item">
			 				<img src="dependencias/boostrap/img/estadio12.jpg"class="img-fluid"style="width: 70%" >
			 				<div class="carousel-caption">
			 				<?php 
			 					$name = "SELECT *FROM estadio WHERE Id_Estadio = 12";
			 					$query = mysqli_query($conexion,$name);
			 					while($fila = mysqli_fetch_array($query))
			 					{
			 				?>
			 					<div class="row justify-content-center">
			 						<div class="col-6">
				 						<h4 class="bg-light text-dark"><?php echo $fila['Nombre_Estadio']; ?></h4>
				 						<h4 class="bg-light text-dark"><?php echo "Capacidad de: ".$fila['Capacidad']; ?></h4>
			 				<?php } ?>
			 						</div>
			 					</div>
			 				</div>
			 			</div> 		
			 		</div>
			 		<!----------------------------------- CONTROLES DE LAS IZQUIERDA Y DERECHA ------------------------------------->

		<a href="#demo"class="carousel-control-prev" data-slide="prev"> <span class="carousel-control-prev-icon"></span></a>
 		<a href="#demo"class="carousel-control-next" data-slide="next"> <span class="carousel-control-next-icon"></span></a>

			 	</div>
		 	</div>
	 	</div>	 
</div>
<div class="container" align="center" style="margin-top: 1%">
	<a href="index.php" class="btn btn-outline-danger">REGRESAR <i class="fas fa-home"></i></a>
</div>
<?php require_once "dependencias/cabecera/footer.php"; ?>