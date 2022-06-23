<?php

//Como lo hariamos sin hacer uso de POO

//$nombre = 'Carlos';
//$edad = 23;
//$pais = 'Mexico';
//
//$nombre2 = 'Alex';
//$edad2 = 18;
//$pais2 = 'Estados Unidos';
//
//echo $nombre;

//--------------------------------------------------------------------------------------------------//
//Usando POO                                                                                        //
//--------------------------------------------------------------------------------------------------//


//La clase es una plantailla con variables y funciones para crear objetos
class Persona{
    public $nombre;  //Esta es una propiedad
    public $edad;  //Esta es una propiedad
    public $pais;  //Esta es una propiedad

    public function mostrarInformacion(){ //Este es un metodo de clase
        echo 'Hola mundo';
    }
}

//Un objeto es todo aquello que posee las variables y funciones de una clase
$carlos = new Persona;
$carlos->nombre = 'Carlos Arturo';
$carlos->edad = 23;
$carlos->pais = 'Mexico';

$carlos->mostrarInformacion();
//echo $carlos->nombre . ' tiene ' . $carlos->edad . ' años de edad.';

$alejando = new Persona;
$alejando->nombre = 'Roberto Musso';
$alejando->edad = 45;
$alejando->pais = 'Argentina';

?>