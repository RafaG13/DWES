<?php
	if(isset($_GET['enviar'])){
		$n = intval($_GET['n']);
		if($n==1){
			echo "0";
		}else if($n==2){
			echo "0 1";
		}else {
			$i=1;
			$siguiente=1;
			$anterior=0;
			$suma=1;
			echo "0 1 ";
			while($i<=$n-2){
				$suma = $siguiente + $anterior;
				echo $suma." ";
				$anterior = $siguiente;
				$siguiente = $suma;
				$i++;
			}
		}
	}else{

?>


<!doctype html>
<html lang="es">
<head>
	<title>E14_U2</title>
	<meta charset="utf-8">
</head>
	<body>
		<h1>Serie de Fibonacci</h1>
		<form method="get">
			<label for="n">
				<input type="number" min="1" max="100" name="n">
			</label>
			<input type="submit" name="enviar" value="Enviar">
		</form>
	</body>
</html>
<?php
	}
?>
