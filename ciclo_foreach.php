<?php 

$meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

$alejando = ['telefono' => 2381145287, 'edad' => 20, 'pais' => 'México'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
        
//        foreach($meses as $mes){
//            echo '<li>' . $mes . '</li>';            
//        }

          foreach($alejando as $dato => $valor){
            echo '<li>' . $dato . ' : ' . $valor . '</li>';
          }


        ?>
    </ul>
</body>
</html>