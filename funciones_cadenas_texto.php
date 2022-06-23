<?php 

$texto = '< > & "" ';

htmlspecialchars($texto); //Convertir caracteres espciales en entidades HTML
trim($texto); //Borra espacio en blanco de cadenas de texto
strlen($texto); //Cantidad de caracteres en una cadena de texto
substr($texto, 1, 4); //Retornar pedazo de una linea de texto, parametro 1 cadenas, parametro 2 donde inicio, parametro 3 donde acaba
strtoupper($texto); //Convertir texto a mayusculas
strtolower($texto); //Convertir texto a minusculas
strpos($texto, 'H'); //Encontrar posicion de caracter de una cadena de texto 
?>