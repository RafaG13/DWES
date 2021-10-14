<?php 
	
	
		if( isset($_GET['enviar'])) {
          
			
		  	$h = $_GET['horas'];
		  	$m = $_GET['minutos'];
		  	$seg_actual = ($h*60*60) + ($m*60); 
		  	$seg_restantes = 86400 - $seg_actual;
		  	if($seg_actual==0) {
		  		echo "Ya es medianoche, faltan 86400 segundos para la próxima";
		  	}else{
		  		$horas_restantes = (($seg_restantes/60)/60);
		  		echo "Faltan $seg_restantes segundos para medianoche ($horas_restantes horas restantes)";
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
		<h1>Ejercicio 8 - Unidad 3</h1>
		<h2>Segundos para media noche (0:00)</h2>
		<form method="get">
			<label for="horas">Horas: 
			<input type="number" name="horas" step="any" max="23" min="0"/></label><br>
         		<label for="minutos">Minutos: 
			<input type="number" name="minutos" step="any" max="59" min="0"/></label><br>
			<br>
          	
          	<input type="submit" value="enviar" name="enviar"/>
          
		</form>
		
	</body>
</html>

<?php 
			}
?>
