<?php

class Disco{
    public $album;
    public $artista;
    public $genero;
    public $year;

    function __construct($album, $artista, $genero, $year){
        $this->album = $album;
        $this->artista = $artista; 
        $this->genero = $album; 
        $this->year = $year;  
    }

    public function showCD(){
        echo 'El album ' . $this->album . ' fue lanzado en el año ' . $this->year . ' por el grupo ' . $this->artista;
    }
}

$merm4id = new Disco('BOOM-BOOM-SHAKE!', 'Merm4id', 'J-Pop', '2021');
$merm4id->showCD();


?>