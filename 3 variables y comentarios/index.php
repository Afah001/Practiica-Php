<!DOCTYPE html>
<html>
	<head>
		<title>comentarios_Variables Php</title>
	</head>
	<body>
		
		<?php
				//COMENTARIOS
				

						//comentario de una linea 
						
						/*comentario
						de multiples lineas*/

						#otro comentario

				echo "<h1>VARIABLES</h1> <p>no se especifica el tipo de dato</p>";

				$nombreUsuario="Anderson";
				$edad=19;
				$peso=1.5;
				$soltero=false;

				echo "nombre: $nombreUsuario</br>"."edad:".$edad;   

				/* 
					VARIABLES, es un campo de memoria que se almacena y contiene informacion
					VARIABLES POR DEFECTO

						
						Suelen utilizarsen para cuando necesite mandar informacion de un lado a otro
										tener informacion del servidor 

						Superglobals — Superglobals son variables internas que están disponibles siempre en todos los ámbitos
						$GLOBALS — Hace referencia a todas las variables disponibles en el ámbito global
						$_SERVER — Información del entorno del servidor y de ejecución
						$_GET — Variables HTTP GET
						$_POST — Variables POST de HTTP
						$_FILES — Variables de Carga de Archivos HTTP
						$_REQUEST — Variables HTTP Request
						$_SESSION — Variables de sesión
						$_ENV — Variables de entorno
						$_COOKIE — Cookies HTTP
						$php_errormsg — El mensaje de error anterior
						$HTTP_RAW_POST_DATA — Datos POST sin tratar
						$http_response_header — Encabezados de respuesta HTTP
						$argc — El número de argumentos pasados a un script
						$argv — Array de argumentos pasados a un script 

					VARIABLES DE VARIABLES

						una variable puede contener a otra*/

					$a = 'hola';
					$$a = 'mundo';
						//a contiene a "hola" y "hola" contiene a mundo
					echo "$a $hola";







				
				
		?>

	</body>
</html>
