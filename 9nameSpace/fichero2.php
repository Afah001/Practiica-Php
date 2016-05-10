<?php
namespace cosas;

include 'fichero1.php';
include 'otro.php';

use otro\cosa ;
use ejemplo\clase;

$a=new Cosa(); // instancia a la clase "cosa" del espacio de nombres otro
echo $a->saludo();


$b=new Clase();
echo $b->saludo2()	;
?>	