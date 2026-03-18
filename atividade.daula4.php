<?php

$animais = array("gato", "pato", "rato", "macaco", "gado");
$comida = array("lazanha", "pure", "mandioca", "polenta", "torta");
$esportes = array("vôlei", "basquete", "box", "karatê", "corrida");
$artistas = array("Amaral", "candido", "Hélio", "Lygia", "Milhazes");

foreach($animais as $a){
    echo $a . " | ";
}

 echo "\n";

foreach($comida as $b){
    echo $b . " | ";
}

echo "\n";

foreach($esportes as $c){
    echo $c . " | ";
}

echo "\n";

foreach($artistas as $d){
    echo $d . " | ";
}