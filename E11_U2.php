<?php
	if(isset($_GET['enviar'])){
		$num = $_GET['numero'];
		$l = $num[strlen($num)-1];
		echo "Dado el número ".$num."<br>";
		echo "La primera cifra es: ".$num[0];
		echo "<br>La última cifra es: ".$l;
		
	
	
	}else{
?>


<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Formularios PHP</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Primera y última cifra</h1>
		<form method="get">
			<label>Introduce un número:
			<input type="number" name="numero"  max="99999" placeholder="Máximo 5 cifras"></label><br></br>
			<input type="submit" name="enviar" value="Enviar">
		</form>
	</body>
</html>
<?php
	}
?>
