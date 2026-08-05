<?php

require_once ("modelo/Funcionario.php");
require_once ("modelo/Departamento.php");

$funcionarios = array();

for($i=0; $i < 5; $i++){
    $fun = new Funcionario();
    $fun->setNome(readline("bota o nome do funcionario: \n"));
    $fun->setSalario(readline("quanto é o salario: \n"));
    $fun->setCargo(readline("qual o cargo dele: \n"));

    $depa = new Departamento();
    $depa->setNome(readline("bota o nome do departamento: \n"));
    $depa->setNumeroSala(readline("qual a sala: \n"));

    $fun->getDep($depa);

    array_push($funcionarios, $fun);
}


foreach ($funcionarios as $f) { 
    echo "Nome; " . $f->getNome() . "\n Cargo: " . $f->getCargo() . "\n Departamento: " . $f->getDep()->getNome() . "\n Sala" . $f->getNumeroSala();
}