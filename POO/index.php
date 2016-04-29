<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
									//POO

		
		
		
		//CLASES
		class Persona{ 


				//PROPIEDADES

				public  $nombre;	
				public  $apellido;
				public  $edad;	

				//CONSTRUCTOR

				public function __construct($nombre,$apellido,$edad){

						$this->nombre=$nombre;
						$this->apellido=$apellido;
						$this->edad=$edad;
				}


				//METODOS

				function caminar(){

					echo "Yo camino";

				}

		}

				

				 $obj=new Persona("Anderson","Alarcon",19);  //OBJETO INSTANCIA DE UNA CLASE

				 //IMPRIME PROPIEDADES Y METODOS DE OBJETO
				 echo $obj->nombre." ".$obj->apellido." ".$obj->edad;

				 echo "<br>";
				 
				 echo $obj->caminar();

	?>
</body>
</html>