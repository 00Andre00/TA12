<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Models\{Estudiante,Matricula,Curso};

$matricula = new Matricula();

$matricula->setNumero(001);
$matricula->add(new Estudiante('Leonardo Perez Marin', 1020304050, 72345109));
$matricula->add1(new Curso('Calculo'));
$matricula->add1(new Curso('Algebra vectorial'));

echo "Matricula ".$matricula->getNumero().":"."\n"."<br>";

foreach($matricula->mostrar() as $estudiante){

    echo "Estudiante: ".$estudiante->getNombres()."\n"."<br>";
    echo "Dni: ".$estudiante->getDni()."\n"."<br>";
    echo "Codigo: ".$estudiante->getCodigo()."\n"."<br>";

}

foreach($matricula->mostrar1() as $curso){

    echo "Curso: ".$curso->getNombres()."\n";
}