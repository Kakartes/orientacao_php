<?php

$pessoas = array();
for($i = 1; $i <= 3;$i++){
    $pessoa = array();

    $pessoa["nome"] = readline("informe seu nome: \n");
    $pessoa["idade"] = readline("informe sua idade: \n");
    $pessoa["peso"] = readline("informe seu peso: \n");
   
    array_push($pessoas, $pessoa);
}

print_r($pessoas);

//print_r($pessoa);

