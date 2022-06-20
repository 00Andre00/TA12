<?php

namespace App\Controllers;
use App\Models\{Estudiante,Curso};

class Matricula
{
    private $arreglo;
    private $arregloc;
    public function __construct()
    {
        $this->arreglo = [];
        $this->arregloc = [];
    }
    public function add(Estudiante $estudiante)
    {
        $this->arreglo1[] = $estudiante;
    }
    public function listar()
    {
        return $this->arreglo;
    }
    public function addc(Curso $curso)
    {
        $this->arregloc[] = $curso;
    }
    public function listarc()
    {
        return $this->arregloc;
    }
}