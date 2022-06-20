<?php

namespace App\Models;
class Curso
{
    private $nom;
    private $creditos;

    public function __construct($nom, $creditos)
    {
        $this->nom = $nom;
        $this->creditos = $creditos;
    }
    public function getCreditos()
    {
        return $this->creditos;
    }
    public function getNombre()
    {
        return $this->nom;
    }
}