<?php
	if(isset($_GET['enviar'])){
		
		echo "<style> * {font-family:monospace;}</style>";
	
		$dibujo = $_GET['dibujo'];
		$altura = $_GET['altura'];
		
		$espacios = $altura;
		$ladrillos = 1;
		for($m=1;$m<=$espacios;$m++){
				echo "&nbsp;";
			}
		echo "$dibujo<br>";
		for($i=1;$i<=$altura-1;$i++){
			$ladrillos=$ladrillos+2;
			$espacios=$altura-$i;
			for($j=1;$j<=$espacios;$j++){
				echo "&nbsp;";
			}
			for($k=1;$k<=$ladrillos;$k++){
				echo $dibujo;
			}
			echo "<br>";
			
		}
		
	}else{

?>


<!doctype html>
<html lang="es">
<head>
	<title>E19_U2</title>
	<meta charset="utf-8">
</head>
	<body>
		<h1>Pirámide</h1>
		<form method="get">
			<label for="altura">Introduce la altura: 
				<input type="number" min="1" max="30" name="altura">
			</label>
			<p>¿Cómo la quieres dibujar?</p>
			
			<label>*: 
			<input type="radio" name="dibujo" value="*">
			</label><br>
			
			<label>O:  
			<input type="radio" name="dibujo" value="O">
			</label><br>
			
			<label>@: 
			<input type="radio" name="dibujo" value="@">
			</label><br>
			
			<label>#: 
			<input type="radio" name="dibujo" value="#">
			</label><br>
			
			<label>S: 
			<input type="radio" name="dibujo" value="S">
			</label><br><br>
			
			<input type="submit" name="enviar" value="Enviar">
		</form>
	</body>
</html>
<?php
	}
?>
