<?php 

//Algunas funciones que hemos usado en el curso

/* count() -> Saber el numero de elementos de un arreglo
   sort() -> Ordenar un arreglo de forma ascendente - alfabeticamente
   rsort() -> Ordenar un arreglo de forma descendete - albeteto al reves
   var_dump() -> Saber el tipo de variable que es y su valor
   print_r() -> Saber el valor de una variable, en bool regresa 1 si es true y no muestra nada si es false
*/

// Una funcion es un bloque de codigo que se ejecuta cuando nosotros lo nececitemos

function saludo($nombre){
    echo 'Saludos ' . $nombre . '<br>';
}

saludo('Samuel');

function sumar($num1, $num2){
    $resultado = $num1 + $num2;
    echo $resultado;
}

sumar(2,5);

function sumar_retorno($num1, $num2){
    $resultado = $num1 + $num2;
    return $resultado;
}

$resutado = sumar_retorno(10,15);

function saludo_retorno($nombre){
    return 'Saludos ' . $nombre . '<br>';
}

echo saludo('Samuel');

?>