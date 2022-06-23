<?php 

//Estructura
// if(condicion){
    //Instrucciones si se cumple.
// }else{
    //Instrucciones si no se cumple.
//}

//Operadores logicos
// && = Si
// || = o
// XOR = Solo 1 cumple

$edad = 18;
$nombre = 'Samuel';

if($edad >= 18 && $nombre == 'Samuel'){
    echo "Eres mayor de edad";
}else{
    echo "Eres menor de edad o no te llamas Samuel";
};

?>