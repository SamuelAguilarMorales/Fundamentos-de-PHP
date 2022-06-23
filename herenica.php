<?php

class Persona{
    public $nombre;  //Esta es una propiedad
    public $edad;  //Esta es una propiedad
    public $pais;  //Esta es una propiedad 

    function __construct($nombre, $edad, $pais,){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function mostrarInformacion(){
        //la palabra this hace referencia a las propiedades de la clase
        return $this->nombre. ' tiene ' . $this->edad . ' años de edad.';
    }
}

class Estudiante extends Persona{
    function __construct($nombre, $edad, $pais, $carrera){
        parent::__construct($nombre, $edad, $pais);
        $this->carrera = $carrera;
    }
}

$carlos = new Estudiante('Carlos', 23, 'Mexico', 'Desarrollador');
echo $carlos->carrera;
?>