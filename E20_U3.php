<?php 
 	if(isset($_GET['enviar'])){
 		$tamano = $_GET['tamano'];
		$numero = [];
		$cuadrado = [];
		$cubo = [];
		$numeroAleatorio=0;

		for($i=0;$i<$tamano;$i++){
			$numeroAleatorio=rand(0,100);
			$numero[$i]=$numeroAleatorio;
			$cuadrado[$i]=pow($numeroAleatorio,2);
			$cubo[$i]=pow($numeroAleatorio,3);
			echo $numero[$i]."    -    ".$cuadrado[$i]."    -    ".$cubo[$i]."<br>";
		} 
 	}else{
 	
?>
<!DOCTYPE html>
	<html lang="es">
		<head>
			<title>E20_U3</title>
			<meta charset="utf-8">
		</head>
		<body>
			<h1>Vectores cuadrado y cubo</h1>
			<form method="get">
				<label for="tamano">Tamaño de los vectores: </label>
				<input type="number" name="tamano" min="1" autofocus required>
				<input type="submit" name="enviar" value="Enviar">
			</form>
		</body>
	</html>

<?php
	}	
?>
