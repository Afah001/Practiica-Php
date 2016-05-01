<DOCTYPE hmtml>
<html>
<head>
	<title></title>
</head>
<body>
<?php

	/*VISIBILIDAD-MODIFICADORES DE ACCESO

	Es la forma en como podemos acceder a las propedades y metodos de un objeto

	public , se puede utilizar en todas las clases 
	protected, desde la misma clase o clases heredadas
	private  solo se puede utilizar desde la clase, y  desde un metodo,*/

	 class Facebook{
		//ATRIBUTOS

		public $nombre;
		public $edad;
		private $contrasenia;

		//CONSTRUCTOR

		public function __construct($nombre,$edad,$contrasenia){

			$this->nombre=$nombre;
			$this->edad=$edad;
			$this->contrasenia=$contrasenia;


		}

		//METODOS 

		public function verInformacion (){

				echo "Nombre: ".$this->nombre."<br>";
				echo "Edad: ".$this->edad."<br>";
				echo "constrasenia: ".$this->contrasenia."<br>";

		}

		private function saludoDeInicio(){

				"Hola Anderson";

		}


	}

	$obj=new Facebook("Anderson",19,"jajaj");
	//echo $obj->constrasenia; mostrara un error , ya  q esta PRIVADO 
	$obj->verInformacion();

	$obj->saludoDeInicio();// muestra un error esta PRIVADO

	

?>
</body>
</html>