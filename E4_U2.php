<?php 
	
	
		if( isset($_GET['enviar']) ) {
          
			$h = $_GET['hora'];
          		if($h>= 6 && $h<=12){
          			echo "¡Buenos días!";
          		}else if($h>= 13 && $h<=20){
          			echo "¡Buenas tardes!";
          		}else{
          			echo "¡Buenas noches!";
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
		<h1>Ejercicio 4 - Unidad 3</h1>
		<form method="get">
			<label for="hora">¿Qué hora es? 
			<input type="number" name="hora" min="0" max="23"/></label>	
         	 <br><br>
          	<input type="submit" value="enviar" name="enviar"/>
		</form>
		
	</body>
</html>

<?php 
			}
?>


