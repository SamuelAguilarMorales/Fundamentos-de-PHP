<?php 

function cuadrado (int $numero){
    return $numero * $numero;
}

$numero = 3;
echo 'El cuadrado de ' . $numero . ' es igual a: ' . cuadrado($numero);