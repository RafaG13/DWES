<?php
	$i=0;
	$mostrar=true;
	$clave="1234";
	if(isset($_GET['enviar'])){
		$i=$_GET['intentos'];
		$i++;
		if($i<4 && $clave!=$_GET['codigo']){
			echo "Intento fallado<br>";
			echo "Te quedan ".(4-$i)." intentos";
		}else if($clave==$_GET['codigo']){
			$mostrar=false;
			echo "¡Código correcto!";
		}else {
			echo "Intentos terminados";
			$mostrar=false;
		}
	}
	
	if($mostrar){
	
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>E12_U2</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Caja fuerte</h1>
		<form method="get">
			<input type="text" name="codigo" pattern="[0-9]{4}" placeholder="Inserte el código de 4 cifras"><br>
			<input type="hidden" name="intentos" value="<?php echo $i ?>"><br>
			<input type="submit" name="enviar" value="Enviar"><br>
		</form>
	</body>
</html>
<?php 
	}
?>
