<?php

class Persona{

    private $nombre;
    private $edad;
    private $sexo;
    private $documento;
    private $telefono;

    public function __construct($nombre, $edad, $sexo, $documento, $telefono){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->sexo = $sexo;
        $this->documento = $documento;
        $this->telefono = $telefono;
    }
 public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function setDocumento($documento){
        $this->documento = $documento;
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
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

    public function getTelefono(){
        return $this->telefono;
    }
}

