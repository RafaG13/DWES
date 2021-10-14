<?php
	$mostrarFormulario=true;
	$contador=0;
	$sumatorio=0;
	if(isset($_GET['enviar'])){
		$contador=$_GET['contador'];
		$contador++;
		$sumatorio=$_GET['suma'];
		if($_GET['num']!=-1){
			$sumatorio+=$_GET['num'];
			
		}else{
			$media=$sumatorio/($contador-1);
			echo "Se han introducido ".($contador-1)." números. La media es de: ".$media;
			$mostrarFormulario=false;
		}
		
		
	}
	
	if($mostrarFormulario){
?>

<!doctype html>
<html lang="es">
<head>
	<title>E13_U2</title>
	<meta charset="utf-8">
</head>
	<body>
		<h1>Media de una lista de números números</h1>
		<form method="get">
			<label for="num">Introdue un número: (-1 para terminar)
				<input type="number" min="-1" max="100" name="num">
			</label><br>
			<input type="hidden" name="contador" value="<?php echo $contador;?>">
			<input type="hidden" name="suma" value="<?php echo $sumatorio; ?>">
			<input type="submit" name="enviar" value="Enviar">
		</form>
	</body>
</html>

<?php 
	}
?>
