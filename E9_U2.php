<?php
	if( isset($_GET['enviar'])) {
		
		#Método de ordenación de la burbuja
		
		$numeros = array($_GET['primero'],$_GET['segundo'],$_GET['tercero']);
		
		for($i=0;$i < count($numeros); $i++) {
		
			for($j=0; $j < count($numeros)-1; $j++){
			
				if($numeros[$j+1]>$numeros[$j]){
					$aux = $numeros[$j+1];
					$numeros[$j+1]=$numeros[$j];
					$numeros[$j]=$aux;
				}
			}
		}
		
		
		for($k=0;$k<count($numeros);$k++) {
			echo $numeros[$k];
			if($k<count($numeros)-1) echo " >= ";
		}
		
			
		
      
	}else {
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Formularios PHP</title>
	</head>
	<body>
		<h1>Ordenación de tres números enteros</h1>
		<form method="get">
			<label>Introduce el primer número:
				<input type="number" name="primero">
			</label><br>
			<label>Introduce el segundo número:
				<input type="number" name="segundo">
			</label><br>
			<label>Introduce el tercer número:
				<input type="number" name="tercero">
			</label><br><br>
			<input type ="submit" name="enviar" value="Enviar">
		</form>
	</body>
<html>

<?php
		}
?>
