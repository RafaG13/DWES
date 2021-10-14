<?php 
	
	
		if( isset($_GET['enviar']) && $_GET['a']!=0) {
          
			
          	$a = $_GET['a'];
          	$b = $_GET['b'];
          	$r = 0;
          	if($b==0) {
          		echo "x = 0";
          	}else{
			$r = ((-1)*$b)/$a;
			  echo "x = $r";  	      	
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
		<h1>Ejercicio 6 - Unidad 3</h1>
		<h2>Ax + B = 0</h2>
		<form method="get">
			<label for="a">Introduce el valor de A: 
			<input type="number" name="a" step="any" placeholder="No puede ser 0"/></label><br>
         	<label for="b">Introduce el valor de B: 
			<input type="number" name="b" step="any"/></label>
			
       	   <br>
          	
          	<input type="submit" value="enviar" name="enviar"/>
          
		</form>
		
	</body>
</html>

<?php 
			}
?>


