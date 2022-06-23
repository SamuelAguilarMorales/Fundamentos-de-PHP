<?php 

$meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
$x = 0;

echo 'Repetir con ciclo while <br><br>';
while($x < count($meses)){
    echo $meses[$x] . '<br>';
    $x++;
}

echo '<br>';
echo 'Repetir con ciclo for <br><br>';
for ($i = 0 ; $i < count($meses) ; $i++){
    echo $meses[$i] . '<br>';
}

?>