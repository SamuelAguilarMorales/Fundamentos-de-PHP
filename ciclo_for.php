<?php 

$numero = 0;
echo 'Lista de numero pares del 0 al 100' . '<br><br>';

for($i = 1 ; $numero <= 100; $i++){
    if ($numero % 2 == 0){
        echo $numero . '<br>';
    }
    $numero++;
}

?>