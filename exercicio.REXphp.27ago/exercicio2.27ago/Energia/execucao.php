<?php

require_once("modelo/residencial.php");
require_once("modelo/comercial.php");
require_once("modelo/industricial.php");


    print "1- Residencial \n";
    print "2- Comercial \n";
    print "3- Industrial \n";

    $opcao = readline("qual dessas opções é o lacol de consumo?");

    $consu = null;
    if($opcao == 1){
        $consu = new Residencial();
        $consu->setConsumo(readline("informe o total consumido de Kwh"));
    }else if($opcao == 2){

        $consu = new Comercial();
        $consu->setConsumo(readline("informe o total consumido de Kwh"));
    }else if($opcao == 3){

        $consu = new Industrial();
        $consu->setConsumo(readline("informe o total consumido de Kwh"));

    }

    print "valor total do consumo: " . $consu->getValorFatura();





   