<?php


require_once ("Modelo/Cidade.php");
require_once ("Modelo/Estado.php");

$cidades = array();

//cria os objt e salva no array

    $sc = new Estado();
    $sc ->setNome("Santa Catarina");
    $sc ->setSigla("SC");

    $flor = new Cidade();
    $flor ->setNome("Florianopoles");
    $flor ->setQtdHabitantes(30000);
    $flor ->setAltitude(0);
    $flor ->setEstado($sc);
    array_push($cidades, $flor);

    $blume = new Cidade();
    $blume ->setNome("Blumenau");
    $blume ->setQtdHabitantes(70000);
    $blume ->setAltitude(0);
    $blume ->setEstado($sc);
    array_push($cidades, $blume);


    $pr = new Estado();
    $pr ->setNome("Parana");
    $pr ->setSigla("PR");

    $foz = new Cidade();
    $foz ->setNome("Foz do iguaçu");
    $foz ->setQtdHabitantes(90000);
    $foz ->setAltitude(0);
    $foz ->setEstado($pr);
    array_push($cidades, $foz);
       
    $casc = new Cidade();
    $casc ->setNome("Cascavel");
    $casc ->setQtdHabitantes(120000);
    $casc ->setAltitude(0);
    $casc ->setEstado($pr);
    array_push($cidades, $casc);

    //percorrer o array e exibir texto
    //print_r($cidades);

    foreach ($cidades as $cid){
        print "A cidade " . $cid ->getNome() . "lacalizada no estado " . $cid ->getEstado()->getNome() . $cid ->getEstado()->getSigla() . "possui " . $cid ->getQtdHabitantes() . "habitantes, e uma altitude de " . $cid ->getAltitude() . "metros." . "\n";


    }