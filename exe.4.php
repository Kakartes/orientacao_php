<?php

$contarPar = 0;
$contarImpar = 0;
for($i=1; $i<=10; $i++) {
   $num = readline("informe o numero: ");
   if($num % 2 == 0)
        $contarPar++;
    else
        $contarImpar++;
}


echo "Pares: " . $contarPar . "\n";
echo "impares: " . $contarImpar . "\n";