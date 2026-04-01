<?php

$retangulos = array();



for($i=1; $i<=5 ; $i++){
    $retan = array("base" => readline("informe um numero de base: ") , "altura" => readline("informe um numero de altura: "));
   
    array_push($retangulos, $retan);
} 

//print_r($retangulos);



//echo "primeira base: " . $retangulos[0]["base"] . "\n";

foreach($retangulos as $retan) {
    //echo $retan["base"] . "\n";
    //echo $retan["altura"] . "\n";
    
    echo "a area é " . $retan["base"] * $retan["altura"] . "\n";
  

}

