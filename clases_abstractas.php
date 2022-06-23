<?php

//Con la palabra reservada abstract no puedes llamar o utilizar al metodo a menos que este sea heredado a otra
//Clase la cual si podra usar toda la clase abstract

abstract class Persona{
    public function saludo(){
        echo 'Hola';
    }
}

class Estudiante extends Persona{

}

$carlos = new Estudiante();
$carlos->saludo();

?>