<?php

class Persona{
    public $nombre;  //Esta es una propiedad
    public $edad;  //Esta es una propiedad
    public $pais;  //Esta es una propiedad

    function __construct($nombre, $edad, $pais){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function mostrarInformacion(){
        //la palabra this hace referencia a las propiedades de la clase
        echo $this->nombre. ' tiene ' . $this->edad . ' años de edad.';
    }
}

$samuel = new Persona('Samuel', 22, 'Mexico');
$samuel->mostrarInformacion();

?>