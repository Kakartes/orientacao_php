<?php

require_once("Modelo/filme.php");

$listagem = array();
//ler dados
for ($i=0; $i < 2; $i++) { 
    $fil = new Filme;
    $fil->setTitulo(readline("qual o titudo do filme? "));
    $fil->setDiretor(readline("qual o diretor do filme? "));
    $fil->setAnoLancamento(readline("qual o Ano de lançamento do filme? "));
    $fil->setGenero(readline("qual o genero do filme? "));
    array_push($listagem, $fil);
    };


//menu das opçoes
do{

    echo "\n\n---MENU---\n";
    echo "1- listar titulo e autor \n";
    echo "2- listar genero e ano de lançamento \n";
    $opcao = readline("informe uma opção: \n");

    echo "\n";


    switch($opcao){
//listagem 1 do titulo e autor
    case 1:
        foreach($listagem as $o){
        echo " o titulo é: " . $o->getTitulo() . ", e o nome do autor: " . $o->getDiretor();
        }
        break;

        case 2:
        foreach($listagem as $p){
        echo " o ano de lançamento é: " . $p->getAnoLancamento() . ", e o genero é: " . $p->getGenero();
        }
        break;


        case 3:
     
            break;


    }

}while($opcao != 0);