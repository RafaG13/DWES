<?php 
	
	
		if( isset($_GET['enviar']) ) {
          
			$h = $_GET['horas'];
          		
          		if($h>40){
          			$e = $h -40;
          			$o = $h - $e;
          			$so = $o*12;
          			$se = $e*16;
          			echo "Horas ordinarias: $o horas x 12 euros/hora = $so euros<br>";
          			echo "Horas extraordinarias: $e horas x 16 euros/hora = $se euros";
          		}else{
          			$s = $h*12;	
          			echo "Horas ordinarias: $h horas x 12 euros/hora = $s";
          		}
			
			
		}else {
		
								
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Formulario PHP</title>
		<meta charset="utf-8"/>
	</head>
	<body> 
		<h1>Ejercicio 5 - Unidad 3</h1>
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


