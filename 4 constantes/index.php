<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

			/*CONSTANTES

			 son valores fijos, una constante no puede cambiar en ningun momento , una de sus principales reglas siempre en mayuscula
			 ej numero PI=3,1416; */


					//se pueden representar de dos formas 

							 define("NOMBRE",     "anderson");  
							 echo NOMBRE;
							

					 //otra

					 		const  APELLIDO="alarcon";

					 		echo APELLIDO;

			/*CONSTANTES POR DEFECTO 
			suelen utilizarse cuando quiero intentar depurar algo. asi puedo saber en donde estoy -
			Hay ocho constantes predefinidas que cambian dependiendo de donde son usadas. 

			

			__LINE__	muestra El número de línea actual en el fichero.

			__FILE__	muestra Ruta completa y nombre del fichero con enlaces simbólicos resueltos. Si se usa dentro de un include, devolverá el nombre del fichero incluido.

			__DIR__	muestra Directorio del fichero. Si se utiliza dentro de un include, devolverá el directorio del fichero incluído. Esta constante es igual que dirname(__FILE__). El nombre del directorio no lleva la barra final a no ser que esté en el directorio root.

			__FUNCTION__	muestra Nombre de la función.

			__CLASS__	muestra Nombre de la clase. El nombre de la clase incluye el namespace declarado en (p.e.j. Foo\Bar). Tenga en cuenta que a partir de PHP 5.4 __CLASS__ también funciona con traits. Cuando es usado en un método trait, __CLASS__ es el nombre de la clase del trait que está siendo utilizado.

			__TRAIT__	muestra El nombre del trait. El nombre del trait incluye el espacio de nombres en el que fue declarado (p.e.j. Foo\Bar).
		
			__METHOD__	muestra Nombre del método de la clase.
			
			__NAMESPACE__	Nombre del espacio de nombres actual.*/

	?>	
</body>
</html>