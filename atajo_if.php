<?php 

$edad = 18;
$edad = (isset($edad)) ? $edad : 'El usuario no establecio su edad';
echo 'Edad ' . $edad;

//isset: Nos dice si una variable tiene un valor (true) o no (false)

?>