<?php

//classe pessoa
class Pessoa{

    //Atributos
    public $nome;
    public $endereço;
    public $cidade;
    public $UF;
    public $altura;

    //Métodos
    function ola(){
        echo "Olá mundo! meu nome é ". $this->nome . "\n ";
    }

    function endereço(){
        echo "Moro em ". $this->endereço . ", " . $this->cidade ." \n";

    }

    function altura(){
        echo "Tenho ". $this->altura." \n";

    }

}

//programa principal

$pessoa1 = new Pessoa();
$pessoa1->nome = readline("Informe seu nome: ");
$pessoa1->endereço = readline("Informe seu endereço: ");
$pessoa1->cidade = readline("Informe a cidade que você mora: ");
$pessoa1->UF = readline("Informe seu UF: ");
$pessoa1->altura = readline("Informe sua altura: ");

//informar os metodos

$pessoa1->ola();
$pessoa1->endereço();
$pessoa1->altura();