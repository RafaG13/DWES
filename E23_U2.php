<?php
	//Ejercicio 23 de la Unidad 2
	function generaArrayInt($tamaño){
		$vectorAleatorio=[];
		for($i=0;$i<$tamaño;$i++){
			$vectorAleatorio[$i]=rand(0,100);
		}
		return $vectorAleatorio;
	}
	
	
	
	
	
	
	
	function minimoArrayInt($vector){
		$minimo=$vector[0];
		for($i=0;$i<count($vector);$i++){
			if($vector[$i]<$minimo) $minimo=$vector[$i];
		}
		return $minimo;
	}
	
	
	

	
	function maximoArrayInt($vector){
		$maximo=$vector[0];
		for($i=0;$i<count($vector);$i++){
			if($vector[$i]>$maximo) $maximo=$vector[$i];
		}
		return $maximo;	
	}
	
	
	
	function mediaArrayInt($vector){
		$media=0;
		for($i=0;$i<count($vector);$i++){
			$media+=$vector[$i];
		}
		$media/=count($vector);
		return $media;	
	}
	
	
	
	function estaEnArrayInt($vector,$valor){
		$respuesta="No está en el vector";
		for($i=0;$i<count($vector);$i++){
			if($vector[$i]==$valor) $respuesta="Sí está en el vector";
		}
		return $respuesta;
	}
	
	
	
?>
