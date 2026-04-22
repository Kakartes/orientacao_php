<?php

//declaraçao das classes

class Munitor{

//atributos
public $polegadas;
public $resolução;
public $marca;
public $voltagem;

//métodos
function ligar(){
    echo "Munitor ligado \n";

}

function desligar(){
    echo "Munitor desligado \n";
}

function ExibirImagem(){
    echo "Munitor exibindo imagem em " . $this->polegadas ." polegadas! \n";
}



} //fim da classe. tudo declarado dentro dos {} faz parte da clase e fora não faz parte

//programa principal
//o new que cria o objeto e puxa as classes

$munitor1 = new Munitor();
$munitor1->polegadas = 23;
$munitor1->resolução = "1980x1800";
$munitor1->marca = "AOC";
$munitor1->voltagem = "220";

$munitor1->ligar();
$munitor1->ExibirImagem();
$munitor1->desligar();


printf("Polegadas: %d | Marca: %s\n", $munitor1->polegadas, $munitor1->marca);

//munitor dois

$munitor2 = new Munitor();
$munitor2->polegadas = 15;
$munitor2->resolução = "1220x860";
$munitor2->marca = "AOC";
$munitor2->voltagem = "220";

$munitor2->ligar();
$munitor2->ExibirImagem();
$munitor2->desligar();


printf("Voltagem: %d | Resoluçao: %s\n", $munitor2->voltagem, $munitor2->resolução);


