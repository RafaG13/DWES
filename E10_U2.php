<?php 

	if(isset($_GET['enviar'])){
		$num = $_GET['numero'];
		if($num%2==0) {
			echo $num." es un número par y ";
		}else {
			echo $num." no es un número par y ";
		}
		
		if($num%5==0) {
			echo " es divisible entre cinco";
		}else{
			echo " no es divisible entre cinco";
		}
	}else{

?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Formilarios PHP</title>
		<meta chardset="utf-8">
	</head>
	<body>
		<h1>Número par y/o divisible entre 5</h1>
		<form method="get">
			<label>Introduce un número:
				<input type="number" name="numero">
			</label><br><br>
			<input type="submit" name="enviar" value="Enviar">
		</form>
	</body>
</html>

<?php
	}
?>	

