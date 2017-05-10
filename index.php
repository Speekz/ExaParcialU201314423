<?php $numberow = 0;
?>
<!DOCTYPE html>
 <html>
 <head>
 <title>Examen Parcial Bejar</title>
 <link rel="stylesheet"  href="style.css">
 </head>
 <body>
 <div name="top" align="center">
 	<img src="images/HelpGithub.PNG" width="800" height="250"/>
 </div>
 <div name="middle" class="body_container" >
 <div class="row">
	  	<?php
		include 'db_connection.php';
		include 'db_query.php';
		if($result->num_rows > 0){
			?>
		<div class="col_control">	
			<div class="col-sm-6 col">
				<h3>For data scientists</h3>
				<?php
					while($row=$result->fetch_assoc() and $numberow < 3){ ?>
					<div>
						<div class="icon">
							<img src="<?php echo $row['imagen_servicio']?>"/>
						</div>
						<div>
							<p>
								<b><?php echo $row['nombre_servicio']?></b>
							</p>
							<p><?php echo $row['descripcion_servicio']?></p>
						</div>
					</div>
					<?php
						$numberow = $numberow + 1;
						}
						$conn->close();
					?>
			</div>
			<div class="col-sm-6 col">	
				<h3>For IT professionals</h3>
				<?php
				$numberow = 0;
				include 'db_connection.php';
				include 'db_query.php';
					while($row=$result->fetch_assoc()){
						if($numberow >2)
						{
						?>
					<div>
						<div class="icon">
							<img class="max-height:100%; max-width:100%;" src="<?php echo $row['imagen_servicio']?>"/>
						</div>
						<div>
							<p>
								<b><?php echo $row['nombre_servicio']?></b>
							</p>
							<p><?php echo $row['descripcion_servicio']?></p>
						</div>
					</div>
					<?php
						}
						$numberow = $numberow + 1;
						}
						$conn->close();
					}
					?>
			 </div>
		</div>
		</div>
 </div>
 <div name="bottom" align="center">
 	<img src="images/Services.PNG" width="1000" height="300"/>
 </div>
 </body>
 </html>