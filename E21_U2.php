<?php
	$mostrarFormulario=true;
	$contador = 0;
	$numero = "";
	$cadenaDeNumeros = "";
	if(isset($_GET['enviar'])){
		$contador = $_GET['contador'];
		$contador++;
		$numero = $_GET['numero'];
		$cadenaDeNumeros = $_GET['cadenaDeNumeros'];
		$cadenaDeNumeros =$cadenaDeNumeros."@".$numero;
		if($contador==10) {
			$mostrarFormulario=false;
			//Eliminamos el primer @ y lo separamos para formar un array
			
			$cadenaDeNumeros=substr($cadenaDeNumeros,1,strlen($cadenaDeNumeros)-1);
			$arrayDeNumeros = explode("@",$cadenaDeNumeros);
			
			//Ordenamos usando el método de la burbuja
			
			 $longitud = count($arrayDeNumeros);
			 $aux=$arrayDeNumeros[0];
   			 for ($i = 0; $i < $longitud; $i++) {
       			 for ($j = 0; $j < $longitud - 1; $j++) {
           				 if ($arrayDeNumeros[$j] > $arrayDeNumeros[$j + 1]) {
              					  $aux = $arrayDeNumeros[$j];
              					  $arrayDeNumeros[$j] = $arrayDeNumeros[$j + 1];
              					  $arrayDeNumeros[$j + 1] = $aux;
           				 }
      				  }
    			}
    			//Ahora que están ordenados de menor a mayor, guardamos esa información para mostrarla por pantalla
    			$menor=$arrayDeNumeros[0];
    			$mayor=$arrayDeNumeros[count($arrayDeNumeros)-1];
    			for($m=0;$m<count($arrayDeNumeros);$m++){
    				echo $arrayDeNumeros[$m];
    				if($arrayDeNumeros[$m]==$menor) echo " #mínimo";
    				if($arrayDeNumeros[$m]==$mayor) echo " #máximo";
    				echo "<br>";
    			}
		}
		
		
		
		
			
	}
	
	if($mostrarFormulario){

?>


<!doctype html>
<html lang="es">
<head>
	<title>E21_U3</title>
	<meta charset="utf-8"/>
</head>
	<body>
		<h1>Máximo y mínimo de 10 números</h1>
		<form method="get">
			<label for="numero">
				<input type="text" pattern="[-]{0,1}[0-9]{1,10}" name="numero" autofocus="autofocus">
			</label>
			<input type="hidden" name="contador" value="<?php echo $contador; ?>"/>
			<input type="hidden" name="cadenaDeNumeros" value="<?php echo $cadenaDeNumeros; ?>"/>
			<input type="submit" name="enviar" value="Enviar"/>
		</form>
	</body>
</html>
<?php
	}
?>
