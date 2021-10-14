<?php

	
	class RegistroVehiculos{
		private static $kmRecorridos = 0;
		private static $vehiculosCreados = 0;
	
		public static function getKmTotales(){
			return self::$kmRecorridos." Km recorridos por todos los vehículos<br>";
		}	
		
		public static function getVehiculosCreados(){
			return self::$vehiculosCreados." vehículos creados<br>";
		}
		
		public static function setVehiculosCreados(){
			self::$vehiculosCreados+=1;
		}	
      
	      	public static function incrementarKmTotales($kilometros){
			self::$kmRecorridos += $kilometros;
		}
	}
	
	
	
	class Vehiculo {
		
		private $kilometraje = 0;
		public function __construct(){
			RegistroVehiculos::setVehiculosCreados();
		}
		public function andar($kilometros){
			$this->kilometraje+=$kilometros;
			RegistroVehiculos::incrementarKmTotales($kilometros);
		}
		public function getKmRecorridos(){
			return $this->kilometraje." Km recorridos con este vehículo<br>";
		}		
	}
	
	
	class Bicicleta extends Vehiculo {
		public function __construct(){
			parent::__construct();
		}
		public function hacerCaballito(){
			echo "La bicicleta hace el caballito<br>";
		}
	}
	class Coche extends Vehiculo {
	
		public function __construct(){
			parent::__construct();
		}
		public function quemarRuedas(){
			echo "El coche quema las ruedas<br>";
		}
	}

	//Comprobamos el registro actual de vehículos
	echo RegistroVehiculos::getVehiculosCreados();
	echo RegistroVehiculos::getKmTotales();
	
	//Creamos un coche y nos movemos 40 km, lo comprobamos y después otros 60 km y lo volvemos a comprobar
	$coche = new Coche();
	$coche->andar(40);
	echo $coche->getKmRecorridos();
	$coche->andar(60);
	echo $coche->getKmRecorridos();
	
	//Creamos una bici, comprobamos su recorrido actual, después nos movemos 30km y volvemos a comprobarlo.
	$bici = new Bicicleta();
	echo $bici->getKmRecorridos();
	$bici->andar(30);
	echo $bici->getKmRecorridos();
	
	//Consultamos el registro de vehículos y los km totales
	echo RegistroVehiculos::getVehiculosCreados();
	echo RegistroVehiculos::getKmTotales();
	
	//Usamos los dos métodos especificos de objeto
	$bici->hacerCaballito();
	$coche->quemarRuedas();


?>
