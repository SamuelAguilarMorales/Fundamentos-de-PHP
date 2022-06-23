<?php

// String = cadena de texto
$nombre = "Samuel";

// Integer = numero entero
$numero = 7;

// Double = numero decimal
$numero_decimal = 7.7;

// Boleano = verdadero o falso
$verdadero = true;

echo "Hola, $nombre"; //Puede ejecutar variables
echo 'Hola, ' . $nombre; //Concatenar 
echo 'Hola, $nombre'; //Texto plano, no permite variables

echo gettype($nombre); //Saber el tipo de dato de la variable

?>