<?php

require_once("Pessoa/modelo/Pessoa.php");

$pessoas = array();

do {
    echo "\n\n------menu------\n";
    echo "1- cadastrar pessoa fisica\n";
    echo "2- cadastrar pessoas juridica\n";
    echo "3- listar\n";
    echo "4- excluir\n";
    echo "0- sair\n";

    $opcao = readline("informe uma opção: ");
    switch ($opcao) {


        case 1:
            $pessoaf = new PessoaFisica();

            $pessoaf->setNome(readline("informe teu nome: "));
            $pessoaf->setCpf(readline("informe teu cpf: "));
            $pessoaf->setIdade(readline("informe tua idade: "));

            array_push($pessoas, $pessoaf);
            break;

        case 2:
            $pessoaj = new PessoaJuridica();
            $pessoaj->setNome(readline("informe o nome da pessoa juritica: "));
            $pessoaj->setCnpj(readline("informe o cnpj: "));
            $pessoaj->setNomeFantasia(Readline("informe o nome fantasia: "));
            array_push($pessoas, $pessoaj);

                break;

        case 3:
            foreach($pessoas as $l){
              //echo $p
              if($l instanceof PessoaFisica){

              echo $l->getNome() . " idade: " . $l->getIdade() . "cpf: " . $l->getCpf() . "\n";
              } else if($l instanceof PessoaJuridica){
              echo $l->getNome() . " nome fantasia" . $l->getNomeFantasia() . "cnpj: " . $l->getCnpj() . "\n";

              }
            }
            break;


            case 4:
                $idx = readline("informe o indice para excluir: ");
                if($idx >= 0 && $idx < count($pessoas))
                    array_splice($pessoas, $idx, 1);
                else 
                        echo "indice invalido \n";
                break;


        case 0:
            echo "programa encerrado \n";
            break;
    }
} while ($opcao != 0);
