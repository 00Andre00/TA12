<?php

namespace App\Models;

use App\Models\Estudiante;
use App\Models\Curso;

class Matricula{

    private $arreglo;
    private $arreglo1;
    private $numero;

    public function __construct(){

        $this->arreglo = [];
        $this->arreglo1 = [];

    }

    public function setNumero($numero){

        $this->numero = $numero;
    }
    public function getNumero(){

        return $this->numero;
    }
    public function add(Estudiante $estudiante){

        $this->arreglo[] = $estudiante;

    }
    public function mostrar(){

        return $this->arreglo;

    }
    public function add1(Curso $curso){

        $this->arreglo1[] = $curso;

    }
    public function mostrar1(){

        return $this->arreglo1;

    }
}