<?php
	$mostrarFormulario=true;
	$sumatorio=0;
	$contador=0;
	if(isset($_GET['enviar'])){
		$sumatorio=$_GET['suma'];
		$contador=$_GET['contador'];
		$contador++;
		$sumatorio+=$_GET['num'];
		
		if($sumatorio>=1000){
			$mostrarFormulario=false;
			$media=$sumatorio/$contador;
			echo "Total sumado: ".$sumatorio;
			echo "<br>Números totales: ".$contador;
			echo "<br>Media: ".$media;
			
		}
			
		
		
		
	}
	
	if($mostrarFormulario){
?>

<!doctype html>
<html lang="es">
<head>
	<title>E18_U2</title>
	<meta charset="utf-8">
</head>
	<body>
		<h1>Serie de números hasta 1000</h1>
		<form method="get">
			<label for="num">Introdue un número:
				<input type="number" min="1" max="10000" name="num" placeholder="Número distinto de 0">
			</label><br>
			<input type="hidden" name="suma" value="<?php echo $sumatorio;?>">
			<input type="hidden" name="contador" value="<?php echo $contador;?>">
			<input type="submit" name="enviar" value="Enviar">
		</form>
	</body>
</html>

<?php 
	}
?>
