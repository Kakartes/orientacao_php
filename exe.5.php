<?php

$num1 = readline("qual o primeiro numero: ");
$num2 = readline("qual o segundo numero: ");

 for($i=$num1; $i<=$num2; $i++) {
        if($i % 5 == 0)
            echo $i . "\n";
    }