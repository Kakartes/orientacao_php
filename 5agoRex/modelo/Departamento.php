<?php


require_once ("Funcionario.php");


class Departamento{

    private $nome;
    private $numeroSala;
    private Funcionario $funcionario;
    

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of numeroSala
     */
    public function getNumeroSala()
    {
        return $this->numeroSala;
    }

    /**
     * Set the value of numeroSala
     */
    public function setNumeroSala($numeroSala): self
    {
        $this->numeroSala = $numeroSala;

        return $this;
    }

    /**
     * Get the value of funcionario
     */
    public function getFuncionario(): Funcionario
    {
        return $this->funcionario;
    }

    /**
     * Set the value of funcionario
     */
    public function setFuncionario(Funcionario $funcionario): self
    {
        $this->funcionario = $funcionario;

        return $this;
    }
    }