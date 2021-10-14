<?php
	class DadoPoker{
		private $nombreFigura = "";
		public function tira(){
         	RegistroTiradas::setTiradasTotales();
			switch(rand(1,6)){
				case 1:
					$this->nombreFigura = "As";
					break;
				case 2:
					$this->nombreFigura = "K";
					break;
				case 3:
					$this->nombreFigura = "Q";
					break;
				case 4:
					$this->nombreFigura = "J";
					break;
				case 5:
					$this->nombreFigura = "7";
					break;
				case 6:
					$this->nombreFigura = "8";
					break;
             	default: 
					echo "Error inesperado"; 
					break;						
			}
		}
		public function nombreFigura(){
			return $this->nombreFigura."<br>";
		}
	}
	
	class RegistroTiradas{
		private static $tiradasTotales = 0;
		public static function setTiradasTotales(){
			self::$tiradasTotales+=1;
		}
		public static function getTiradasTotales(){
			return "Se han tirado datos ".self::$tiradasTotales." veces<br>";
		}
	}
	
	class Cubilete{
	
		private $dados = array();
		
		public function __construct($dado1, $dado2, $dado3, $dado4, $dado5){
			$this->dados = [$dado1 ,$dado2 ,$dado3 ,$dado4 ,$dado5];
			
		}
		
		public function jugar(){
			echo "Jugada: <br>";
			foreach($this->dados as $dado){
				$dado->tira();
				echo $dado->nombreFigura();
			}
		}
	
	}

//Creamos un dado y vemos si cuenta la tirada en el registro
$dado0 = new DadoPoker();
$dado0->tira();
echo $dado0->nombreFigura();
echo RegistroTiradas::getTiradasTotales();

//Creamos un cubilete, jugamos y comprobamos las tiradas totales
$cubilete = new Cubilete(new DadoPoker(),new DadoPoker(),new DadoPoker(),new DadoPoker(),new DadoPoker());
$cubilete->jugar(); 
echo RegistroTiradas::getTiradasTotales();


	
?>



