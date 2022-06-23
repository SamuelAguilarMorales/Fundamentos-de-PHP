<?php

class Usuario{
    public $nombre;
    public $correo;

    function __construct($nombre, $correo){
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function mostrarInfo(){
        return $this->correo;
    }
}

$carlos = new Usuario('Carlos', 'samuelaguilarcontacto@gmail.com');
echo $carlos->nombre;

?>