<?php
	//Ejercicio 22 de la Unidad 2
	
	$vectorAleatorio=[];
	for($i=0;$i<20;$i++){
		$vectorAleatorio[$i]=rand(0,100);
	}
	$pares=[];
	$impares=[];
	$pa=0;
	$im=0;

	for($j=0;$j<count($vectorAleatorio)-1;$j++){
		if($vectorAleatorio[$j]%2==0) {
			$pares[$pa]=$vectorAleatorio[$j];
			$pa++;
		}else{
			$impares[$im]=$vectorAleatorio[$j];
			$im++;
		}
	}
	
	$vectorFinal=array_merge($pares,$impares);
	
	for($f=0;$f<count($vectorFinal)-1;$f++){
		echo $vectorFinal[$f]."<br>";
	}
?>
