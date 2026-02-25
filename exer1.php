<?php

$numero = 0;

for ($i=0; $i < 11; $i++) {
$numero = readline("iforme um numero: " . "\n");
if ($numero > 0 ) {
  
    echo $numero . " Positivo " . "\n";
}
else if ($numero < 0 ) {
    echo $numero . " negativo " . "\n";

}



}