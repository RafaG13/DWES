<?php 
 	if(isset($_GET['enviar'])){
 		include_once "E24_U2.php";
 		$filas=$_GET['filas'];
 		$columnas=$_GET['columnas'];
 		$columna=$_GET['columna'];
 		$fila=$_GET['fila'];
		echo "Creamos una matriz $filas x $columnas<br><br>";
		$matriz = generaArrayBiInt($filas, $columnas);
		//Dibujamos la matriz
		foreach($matriz as $f){
			echo "[ ";
			foreach($f as $c){
				echo $c." ";
			}
			echo " ]<br>";
		}
		
		
		echo "<br><br>Extraemos la fila $fila: <br><br>";
			if($fila>$filas){
				echo "No existe esa fila";
			}else{
				print_r(filaDeArrayBiInt($matriz,$fila));
			}
		
		
		echo "<br><br>Extraemos la columna $columna: <br><br>";
			if($columna>$columnas){
				echo "No existe esa columna";
			}else{
				print_r(columnaDeArrayBiInt($matriz,$columna));
			}
		
	
 	}else{
 	
?>
<!DOCTYPE html>
	<html lang="es">
		<head>
			<title>E23_U3</title>
			<meta charset="utf-8">
		</head>
		<body>
			<h1>Funciones para matriz MxN</h1>
			<form method="get">
				<label for="filas">Número de filas: </label>
				<input type="number" name="filas" min="1" autofocus required><br>
				<label for="columnas">Número de columnas: </label>
				<input type="number" name="columnas" min="1" required><br>
				<label for="fila">¿Qué fila quieres consultar? </label>
				<input type="number" name="fila" min="1" autofocus required><br>
				<label for="columna">¿Qué columna quieres consultar? </label>
				<input type="number" name="columna" min="1" autofocus required><br>
				<input type="submit" name="enviar" value="Enviar">
			</form>
		</body>
	</html>

<?php
	}	
?>







































