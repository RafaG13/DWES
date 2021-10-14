<?php 
 	if(isset($_GET['enviar'])){
	 	$tamano = $_GET['tamano'];
	 	$numero = $_GET['numero'];
		include_once "E23_U2.php";
		echo "Vector generado de $tamano elementos: ";
		$vector=generaArrayInt($tamano);
		echo "[ ";
		foreach($vector as $elemento){
			echo $elemento." ";
		}
		echo "]";
		
		
		
		
		echo "<br>";
		echo "Mínimo: ";
		echo  minimoArrayInt($vector);
		echo "<br>";
		echo "Máximo: ";
		echo  maximoArrayInt($vector);
		echo "<br>";
		echo "Media: ";
		echo  mediaArrayInt($vector);
		echo "<br>";
		echo "¿Está el $numero en el vector?: ";
		echo  estaEnArrayInt($vector,$numero);		
		
 	}else{
 	
?>
<!DOCTYPE html>
	<html lang="es">
		<head>
			<title>E23_U3</title>
			<meta charset="utf-8">
		</head>
		<body>
			<h1>Funciones para vector</h1>
			<form method="get">
				<label for="tamano">Tamaño del vector: </label>
				<input type="number" name="tamano" min="1" autofocus required>
				<label for="numero">¿Qué número quieres buscar? </label>
				<input type="number" name="numero" min="1" required>
				<input type="submit" name="enviar" value="Enviar">
			</form>
		</body>
	</html>

<?php
	}	
?>






























