<?php
	$mostrarFormulario=true;
	$contadorPositivos=0;
	$contadorNegativos=0;
	$contador=0;
	if(isset($_GET['enviar'])){
		$contadorPositivos=$_GET['positivos'];
		$contadorNegativos=$_GET['negativos'];
		$contador=$_GET['contador'];
		$contador++;
		if($_GET['num']<0){
			$contadorNegativos++;
		}
		if($_GET['num']>0){
			$contadorPositivos++;
		}
		if($contador==10){
			$mostrarFormulario=false;
			echo "Hay un total de ".$contadorPositivos." números positivos y ".		$contadorNegativos." números negativos";
			
		}
			
		
		
		
	}
	
	if($mostrarFormulario){
?>

<!doctype html>
<html lang="es">
<head>
	<title>E15_U2</title>
	<meta charset="utf-8">
</head>
	<body>
		<h1>Lista de números positivos y negativos</h1>
		<form method="get">
			<label for="num">Introdue un número:
				<input type="number" min="-100" max="100" name="num" placeholder="Número distinto de 0">
			</label><br>
			<input type="hidden" name="positivos" value="<?php echo $contadorPositivos;?>">
			<input type="hidden" name="negativos" value="<?php echo $contadorNegativos;?>">
			<input type="hidden" name="contador" value="<?php echo $contador;?>">
			<input type="submit" name="enviar" value="Enviar">
		</form>
	</body>
</html>

<?php 
	}
?>
