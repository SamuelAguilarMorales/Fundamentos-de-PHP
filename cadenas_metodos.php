<?php

class Usuario{
    public $nombre;
    public $correo;

    function __construct($nombre, $correo){
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function mostrarNombre(){
        echo 'Tu nombre es: ' .$this->nombre . '<br>';
        return $this;
    }

    public function mostrarCorreo(){
        echo 'Tu correo electronico es: ' . $this->correo . '<br>';
        return $this;
    }


}

$carlos = new Usuario('Carlos', 'samuelaguilarcontacto@gmail.com');
$carlos->mostrarNombre()->mostrarCorreo();

?>