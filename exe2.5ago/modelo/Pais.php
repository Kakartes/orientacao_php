<?php

//require_once("Jogador.php");

class Pais {

    private $nome;
    private $continente;
    private $titulos;

    

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
     * Get the value of continente
     */
    public function getContinente()
    {
        return $this->continente;
    }

    /**
     * Set the value of continente
     */
    public function setContinente($continente): self
    {
        $this->continente = $continente;

        return $this;
    }

    /**
     * Get the value of titulos
     */
    public function getTitulos()
    {
        return $this->titulos;
    }

    /**
     * Set the value of titulos
     */
    public function setTitulos($titulos): self
    {
        $this->titulos = $titulos;

        return $this;
    }
}