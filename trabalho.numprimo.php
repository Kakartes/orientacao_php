<?php

function primo($numero) {
   $armazenamento = 0;
   while($numero != 1) {
 
      $numero = readline("diga um numero: ");
       for($i=$numero+1; $i> 0; $i--) {
         if ($numero % $i == 0) {
         $armazenamento = $armazenamento + 1;
      }
    }


      if ($armazenamento == 2) {
         echo "o numero é primo \n";
      } else {
         echo "o numero não é primo \n";
      }
      $armazenamento = 0;
 }
}

primo($numero);