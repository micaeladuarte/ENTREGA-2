<?php

class ResponsableV {

    private $nroEmpleado;
    private $nroLicencia;
    private $nombreResp;
    private $apellidoResp;

    public function __construct($nroEmp, $nroLic, $nomResp, $apellResp)
    {
        $this-> nroEmpleado= $nroEmp;
        $this-> nroLicencia= $nroLic;
        $this-> nombreResp= $nomResp;
        $this-> apellidoResp= $apellResp;
        
    }

    //Metodos de acceso GET

    public function getNroEmpleado() {
        return $this-> nroEmpleado;
    }

    public function getNroLicencia() {
        return $this-> nroLicencia;
    }

    public function getNombreResp() {
        return $this-> nombreResp;
    }

    public function getApellidoResp() {
        return $this-> apellidoResp;
    }


    //Metodos de acceso SET

    public function setNroEmpleado($nroEmp) {
        $this-> nroEmpleado= $nroEmp;
    }

    public function setNroLicencia($nroLic) {
        $this-> nroLicencia= $nroLic;
    }

    public function setNombreResp($nomResp) {
        $this-> nombreResp= $nomResp;
    }

    public function setApellidoResp($apellResp) {
        $this-> nroEmpleado= $apellResp;
    }


    //OTROS METODOS

    public function __toString()
    {
        return "Nro del empleado responsable: ". $this->getNroEmpleado. "\n Nro de licencia: ". $this->getNroLicencia().
        "n\ Nombre y Apellido del responsanle: ". $this->getNombreResp(). " ". $this->getApellidoResp();
    }







}