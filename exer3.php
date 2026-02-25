<?php


for($i=1; $i<=5; $i++) {
   $nome = readline("qual teu nome? ");
   $altura = readline("qual tua altura (m)? ");
   $peso = readline("qual teu peso(kg)? ");

$imc = $peso / ($altura * $altura);

echo $nome . " tem peso " . $peso . ", altura " .$altura . " e IMC " . $imc . ". \n";

}