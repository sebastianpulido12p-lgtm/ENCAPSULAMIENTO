<?php

class Persona{

    private $nombre;
    private $edad;
    private $sexo;
    private $documento;
    private $apellido;

    public function __construct($nombre, $edad, $sexo, $documento, $apellido){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->sexo = $sexo;
        $this->documento = $documento;
        $this->apellido = $apellido;
    }

    public function setNombre($nombre){
        if (is_string($nombre) && trim ($nombre) !== '') {
            $this->nombre = $nombre;
        }
    }
    
    public function setApellido($apellido){
        if (is_string($apellido) && trim ($apellido) !== '') {
            $this->apellido = $apellido;
        }
    }

    public function setEdad($edad){
        if (is_numeric($edad) && $edad >=0 && $edad <=120) {
            $this->edad = $edad;
        }
    }


    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function setDocumento($documento){
        $this->documento = $documento;
    }

    


    public function getNombre(){
        return $this->nombre;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function getDocumento(){
        return $this->documento;
    }

    public function getApellido(){
        return $this->apellido;
    }

}

