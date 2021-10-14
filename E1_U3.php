<?php 
	
	
		if( isset($_GET['enviar']) ) {
          
			$x = $_GET['primero'];
          	$y = $_GET['segundo'];
          	$o = $_GET['operacion'];
          	$r = 0;
          switch($o){
            case "sumar":
            	$r = $x + $y; 
              echo "Resultado: $x + $y = $r";
            break;  
              
            case "restar":
            	$r = $x - $y; 
              echo "Resultado: $x - $y = $r";
            break;  
              
            case "multiplicar":
            	$r = $x * $y; 
              echo "Resultado: $x x $y = $r";
            break;  
              
            case "dividir":
            	$r = $x / $y; 
              echo "Resultado: $x / $y = $r";
            break;    
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
		<h1>Ejercicio 1 - Unidad 3</h1>
		<form method="get">
			<label for="usuario">Primer número: 
			<input type="number" name="primero"/></label>
         	<label for="usuario">Segundo número: 
			<input type="number" name="segundo"/></label>
			
          <br>
          	<label>Sumar:
            <input type="radio" name="operacion" value="sumar"></label><br>
        	<label>Restar:
            <input type="radio" name="operacion" value="restar"></label><br>
          	<label>Multiplicar:
            <input type="radio" name="operacion" value="multiplicar"></label><br>
          	<label>División:
            <input type="radio" name="operacion" value="dividir"></label><br>
          	<br>
          	<input type="submit" value="enviar" name="enviar"/>
          
		</form>
		
	</body>
</html>

<?php 
			}
?>


