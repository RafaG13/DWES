<?php 
	
	
		if( isset($_GET['enviar'])) {
          
			
		  	$a = $_GET['a'];
		  	$b = $_GET['b'];
		  	$c = $_GET['c'];
		  	$r = ($a + $b + $c)/3;
		  	
		  	if($r<5) {
		  	
		  		echo "Insuficiente: $r";
		  		
		  	}else if ($r<6) {
				
				  echo "Suficiente: $r";  	      	
		  	}else if ($r<7) {
		  		echo "BIen: $r";
		  	}else if ($r<9) {
		  		echo "Notable: $r";
		  	}else {
		  		echo "Sobresaliente: $r";
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
		<h1>Ejercicio 7 - Unidad 3</h1>
		<h2>Cálculo de la nota media</h2>
		<form method="get">
			<label for="a">Nota del primer módulo: 
			<input type="number" name="a" step="any" max="10" min="0"/></label><br>
         		<label for="b">Nota del segundo módulo: 
			<input type="number" name="b" step="any" max="10" min="0"/></label><br>
			<label for="c">Nota del tercer módulo: 
			<input type="number" name="c" step="any" max="10" min="0"/></label><br>
			
       	   <br>
          	
          	<input type="submit" value="enviar" name="enviar"/>
          
		</form>
		
	</body>
</html>

<?php 
			}
?>

