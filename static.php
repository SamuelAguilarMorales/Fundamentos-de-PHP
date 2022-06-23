<?php

class Persona{

    public static $dia = '25 de junio';

    public static function saludo($nombre = null){
        if($nombre){
            return 'Hola buena dia ' . $nombre;
        }
        return 'Hola buena dia';
    }
}

$carlos = new Persona(); //Instancia de clase

//Con static podemos entrar a las propiedades sin hacer una instancia de clase
echo Persona::saludo();

?>