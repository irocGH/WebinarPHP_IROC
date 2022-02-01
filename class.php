<?php

class miClase{

    private $nombreObjeto="Objeto Vacio. ";
    public function __construct(){

        //echo "se crea objeto desde el constructior";
    }

    public function cambiaNombre($nuevoNombre){

        echo "El nombre anterior era: ". $this->nombreObjeto;
        $this->nombreObjeto=$nuevoNombre;
        echo "El nombre actual es: ". $this->regresaNombre(). "<br />";
    }

    public function regresaNombre(){

        return $this->nombreObjeto;

    }
}
    $objeto1= new miClase();
    $objeto1->cambiaNombre("OBJETO UNO");