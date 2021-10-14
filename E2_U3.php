<?php 
	
	
		if( isset($_GET['enviar']) ) {
          
			$h = $_GET['horas'];
          		$s = 12*$h;
          		echo "12 euros/hora x $h horas = $s euros a la semana";
          
			
			
		}else {
		
								
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Formulario PHP</title>
		<meta charset="utf-8"/>
	</head>
	<body> 
		<h1>Ejercicio 2 - Unidad 3</h1>
		<form method="get">
			<label for="horas">Número de horas trabajadas: 
			<input type="number" name="horas" min="0" max="168"/></label>	
         	 <br><br>
          	<input type="submit" value="enviar" name="enviar"/>
		</form>
		
	</body>
</html>

<?php 
			}
?>


