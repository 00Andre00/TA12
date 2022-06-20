<?php

namespace App\Models;
class Estudiante
{
    private $dni;
    private $nom;
    private $codigo;
    private $edad;

    public function __construct($nom, $dni, $codigo,$edad)
    {
        $this->nom = $nom;
        $this->dni = $dni;
        $this->codigo = $codigo;
        $this->edad = $edad;
    }
    public function getCodigo()
    {
        return $this->codigo;
    }
    public function getDni()
    {
        return $this->dni;
    }
    public function getNombre()
    {
        return $this->nom;
    }
    public function getEdad()
    {
        return $this->edad;
    }
}