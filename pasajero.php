<?php

class Pasajero {
    private $nombre;
    private $apellido;
    private $nroDoc;
    private $telefono;


    public function __construct($nomb, $ape, $dni, $tel) 
    {
        $this-> nombre= $nomb;
        $this-> apellido= $ape;
        $this-> nroDoc= $dni;
        $this-> telefono= $tel;       
    }

    public function getNombre () {
       return $this-> nombre;
    }

    public function getApellido() {
        return $this-> apellido;
    }

    public function getNroDoc () {
        return $this-> nroDoc;
    }

    public function getTelefono () {
        return $this-> telefono;
    }


    //Metodos de acceso SET

    public function setNombre($nomb) {
        $this->nombre= $nomb;
    }

    public function setApellido($ape) {
        $this-> apellido= $ape;
    }

    public function setNroDoc ($dni) {
        $this-> nroDoc= $dni;
    }

    public function setTelefono($tel) {
        $this-> telefono= $tel;
    }


    //OTROS METODOS 

    public function __toString()
    {
        return $this->getNombre(). " ".  $this-> getApellido(). "\n".
        "Nro de documento: ". $this-> getNroDoc(). " \n Telefono: ". $this->getTelefono();
    }




}