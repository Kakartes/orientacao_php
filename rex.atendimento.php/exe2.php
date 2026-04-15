<?php

$v = array();

for($i = 1; $i <=5; $i++ ){
    $num = readline("informe um numero ");

    array_push($v, $num);
}

/*print_r($v);

for($i= 0 ; $i<= 4; $i++){
    echo $v[$i] . "\n";
}
    */

foreach($v as $a){
    echo $a . "\n";


}

