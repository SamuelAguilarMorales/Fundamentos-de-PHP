<?php

class Persona{
    public $nombre;  //Esta es una propiedad
    public $edad;  //Esta es una propiedad
    public $pais;  //Esta es una propiedad

    public function mostrarInformacion(){
        echo $this->nombre; //la palabra this hace referencia a las propiedades de la clase
    }
}

$carlos = new Persona;
$carlos->nombre = 'Carlos Arturo';
$carlos->edad = 23;
$carlos->pais = 'Mexico';

$carlos->mostrarInformacion();

?>