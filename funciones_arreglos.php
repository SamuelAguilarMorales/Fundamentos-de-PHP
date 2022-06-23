<?php 

$amigo = array('telefono' => 2381452369, 'edad' => 20, 'pais' => 'Mexico');

extract($amigo); //extrar elementos de arreglo asociativo como si fueran variables

echo $telefono;
echo $edad;
echo $pais;


$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');

array_pop($semana); //Eliminar ultimo elemento del array
join(', ', $semana); //Primer parametro lo que queremos agregar al arreglo
count($semana); //Cantidad de valores del arreglo
sort($semana); //Ordenar arreglo ascendente
rsort($semana); //Ordenar arreglo descendente
array_reverse($semana) //Invertir un arreglo

?>