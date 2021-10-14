<?php
	if(isset($_GET['enviar'])){
		$num = $_GET['numero'];
		$primo = true;
		for($i=2;$i<$num;$i++){
			if($num%$i==0) $primo=false;
		}
		if($primo && $num!=1){
			echo "$num sí es un número primo";
		}else{
			echo "$num no es un número primo";
		}
	}else{

?>


<!doctype html>
<html lang="es">
<head>
	<title>E16_U2</title>
	<meta charset="utf-8">
</head>
	<body>
		<h1>¿Es un número primo?</h1>
		<form method="get">
			<label for="numero">
				<input type="number" min="1" max="1000" name="numero">
			</label>
			<input type="submit" name="enviar" value="Enviar">
		</form>
	</body>
</html>
<?php
	}
?>
