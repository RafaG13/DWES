<?php 
	
	
		if( isset($_GET['enviar']) ) {
          
		$dia = $_GET['dia'];
          	
          switch($dia){
            case "lunes":
            	
              echo "EL lunes primera hora tenemos DIW";
            break;  
              
            case "martes":
            	
              echo "EL martes primera hora tenemos DWEC";
            break;  
              
            case "miercoles":
            	
              echo "EL miércoles primera hora tenemos EIE";
            break;  
              
            case "jueves":
            	
              echo "EL jueves primera hora tenemos DWES";
            break;   
            
            case "viernes":
            	
              echo "EL viernes primera hora tenemos DWEC";
            break; 
            
            case "sabado":
            	
              echo "EL sábado no tenemos clase";
            break;  
            
            case "domingo":
            	
              echo "EL domingo no tenemos clase";
            break; 
            
            default:
            	echo "Sucedió un error inesperado";
            break;
          }
			
			
		}else {
		
								
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Formulario PHP</title>
		<meta charset="utf-8"/>
	</head>
	<body> 
		<h1>Ejercicio 3 - Unidad 3</h1>
		<form method="get">
		<h2>¿Qué día quieres consultar?</h2><br>

          	<label>Lunes:
            <input type="radio" name="dia" value="lunes"></label><br>
        	<label>Martes:
            <input type="radio" name="dia" value="martes"></label><br>
          	<label>Miércoles:
            <input type="radio" name="dia" value="miercoles"></label><br>
          	<label>Jueves:
            <input type="radio" name="dia" value="jueves"></label><br>
          	<label>Viernes:
            <input type="radio" name="dia" value="viernes"></label><br>         	
          	<label>Sábado:
            <input type="radio" name="dia" value="sabado"></label><br>         	
          	<label>Domingo:
            <input type="radio" name="dia" value="domingo"></label><br><br>          
            <input type="submit" value="enviar" name="enviar"/>
		</form>
		
	</body>
</html>

<?php 
			}
?>


