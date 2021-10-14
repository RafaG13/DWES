<?php
	class Vehiculo {
		static private $kmRecorridos = 0;
		private $kilometraje = 0;
		static private $vehiculosCreados = 0;
		
		public function andar($kilometros){
			$this->kilometraje+=$kilometros;
			self::$kmRecorridos+=$kilometros;
		}
		public function getKmRecorridos(){
			return $this->kilometraje." Km recorridos con este vehículo<br>";
		}	
		
		protected static function setVehiculosCreados(){
			self::$vehiculosCreados+=1;
		}
						
		static public function getVehiculosCreados(){
			return self::$vehiculosCreados." vehículos creados<br>";
		}
		
		static public function getKmTotales(){
			return self::$kmRecorridos." Km recorridos por todos los vehículos<br>";
		}		
	}
	
	
	class Bicicleta extends Vehiculo {
		public function __construct(){
			parent::setVehiculosCreados();
		}
		public function hacerCaballito(){
			echo "La bicicleta hace el caballito<br>";
		}
	}
	class Coche extends Vehiculo {
	
		public function __construct(){
			parent::setVehiculosCreados();
		}
		public function quemarRuedas(){
			echo "El coche quema las ruedas<br>";
		}
	}

	echo Vehiculo::getVehiculosCreados();
	echo Vehiculo::getKmTotales();
	$coche = new Coche();
	$coche->andar(40);
	echo $coche->getKmRecorridos();
	$coche->andar(60);
	echo $coche->getKmRecorridos();
	$bici = new Bicicleta();
	echo $bici->getKmRecorridos();
	$bici->andar(30);
	echo $bici->getKmRecorridos();
	echo Vehiculo::getVehiculosCreados();
	echo Vehiculo::getKmTotales();
	$bici->hacerCaballito();
	$coche->quemarRuedas();


?>
