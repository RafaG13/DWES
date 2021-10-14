<?php
	if(isset($_GET['enviar'])){
		$num = $_GET['numero'];
		$factorial=1;
		for($i=1;$i<=$num;$i++){
			$factorial=$factorial*$i;
		}
		echo "EL factorial de ".$num." es ".$factorial;
		
	}else{

?>


<!doctype html>
<html lang="es">
<head>
	<title>E19_U2</title>
	<meta charset="utf-8">
</head>
	<body>
		<h1>Factorial de un número</h1>
		<form method="get">
			<label for="numero">
				<input type="number" min="0" max="30" name="numero">
			</label>
			<input type="submit" name="enviar" value="Enviar">
		</form>
	</body>
</html>
<?php
	}
?>
