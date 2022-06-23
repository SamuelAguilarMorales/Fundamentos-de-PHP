<?php 

$meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

//Ordenar arreglo manera ascendete
//Igualmente funciona con arreglos de numeros
sort($meses);

//Ordenar arreglo manera ascendete
//Igualmente funciona con arreglos de numeros
rsort($meses);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del año</title>
</head>
<body>
    <h1>Meses del año</h1>
    <ul>
        <?php 
        
        foreach($meses as $mes){
            //Ejecutar
            echo '<li>' . $mes . '</li>';
        };
        
        ?>
    </ul>
</body>
</html>