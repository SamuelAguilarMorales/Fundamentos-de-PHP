<?php

// Retorna 1 si derecha es mayor
// Retorna 0 si son iguales
// Retorna -1 si izquierda es mayor

// echo 1 <=> 1; 

$arreglo = array(3,5,1,7,2,9);
// sort($arreglo);

//Version antigua


//function comprarar($a , $b){
//    if($a == $b){
//        return 0;
//    }else if ($a > $b){
//        return 1;
//    }else{
//        return -1;
//    }
// }


//Nueva forma

function comprarar($a , $b){
    return $a <=> $b;
}

usort($arreglo, 'comprarar'); //Ordenar un arreglo con una funcion propia creada

echo implode(' - ', $arreglo);
