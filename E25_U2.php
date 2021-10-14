<?php
	class Animal{
		public function dormir(){
			echo "El animal se duerme <br>";
		}
		public function desplazarse(){
			echo "El animal se mueve<br>";
		}
		public function comer(){
			echo "EL animal come<br>";		
		}
	}
	
	class Mamifero extends Animal{
		public function criar(){
			echo "El mamífero amamanta a sus crías<br>";		
		}
		public function pelo(){
			echo "Al mamífero le crece el pelo<br>";		
		}
		public function jactarse(){
			echo "Se jacta de ser un mamífero<br>";		
		}
	}
	
	class Ave extends Animal{
		public function pia(){
			echo "El ave pia<br>";		
		}
		public function pica(){
			echo "El ave picotea<br>";		
		}
		public function poneHuevos(){
			echo "El ave pone huevos<br>";		
		}
	}
	
	class Gato extends Mamifero{
		public function maulla(){
			echo "EL gato maulla<br>";		
		}
		public function ronronea(){
			echo "El gato ronronea<br>";		
		}
		public function esconderse(){
			echo "El gato se esconde<br>";		
		}
	}
	
	class Perro extends Mamifero{
		public function ladra(){
			echo "El perro ladra<br>";		
		}
		public function gruñe(){
			echo "<El perro gruñebr>";		
		}
		public function juegaPelota(){
			echo "El perro juega a la pelota<br>";		
		}
	}
	
	class Canario extends Ave{
		public function canta(){
			echo "El canario empieza a cantar<br>";		
		}
		public function desplazarse(){
			echo "EL canario vuela de un lado a otro<br>";		
		}
		public function comer(){
			echo "El canario come semillas<br>";		
		}
	}
	
	class Pinguino extends Ave{
		public function zambullirse(){
			echo "EL pinguino se zambulle en el agua<br>";		
		}
		public function desplazarse(){
			echo "EL pinguino anda de una forma extraña<br>";		
		}
		public function comer(){
			echo "EL pinguino se come un calamar<br>";		
		}
	}
	
	class Lagarto extends Animal{
		public function desplazarse(){
			echo "El lagarto se arrastra por el suelo<br>";		
		}
		public function comer(){
			echo "El lagarto se come un bicho<br>";		
		}
		public function lengua(){
			echo "El lagarto saca su larga lengua<br>";		
		}
	}
	
	
//Vamos a instanciar un animal, un ave, un canario y un pinguino 
//y comprobar como ejecutan los métodos propios, heredados o redefinidos

$animal = new Animal();
$ave = new Ave();
$pinguino = new Pinguino();
$canario = new Canario();

//duerme el animal y el canario que hereda de él. 
$animal->dormir();
$canario->dormir();

//El pinguino y el canario REDEFINEN el desplazamiento heredado del animal
$pinguino->desplazarse();
$canario->desplazarse();
$animal->desplazarse();

//El ave usa métodos propios que no tienen los animales generales
$ave->pica();

//El canario también picotea, heredado del ave y además canta, como método propio
$canario->canta();
$canario->pica();

	
	
	
	
	
	

?>
