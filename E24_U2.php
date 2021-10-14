<?php
	include_once "E23_U2.php";
	
	function generaArrayBiInt($filas, $columnas){
		$matriz=[];
		for($i=0;$i<$filas;$i++){
			$matriz[$i]=generaArrayInt($columnas);
		}
		return $matriz;
	}
	
	function filaDeArrayBiInt($vector,$fila){
		//Restamos 1, porque los indices empiezan en 0. Cuando pedimos la fila 2 natural,
		//realmente queremos acceder a la 1
		return $vector[$fila-1];
	}
	
	function columnaDeArrayBiInt($vector,$columna){
		$columna--;
		$resultado=[];
		foreach($vector as $f){
			$resultado[]=$f[$columna];
		}
		return $resultado;
	}
	
?>

