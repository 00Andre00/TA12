<?php

namespace App\Models;

class Estudiante{

    private $nombres;
    private $dni;
    private $codigo;
    public function __construct($nombres, $codigo,$dni){

        $this->nombres = $nombres;
        $this->codigo = $codigo;
        $this->dni = $dni;
        
    }

    public function getNombres(){

        return $this->nombres;
    }
    public function getCodigo(){

        return $this->codigo;
    }
    public function getDni(){

        return $this->dni;
    }
 
}