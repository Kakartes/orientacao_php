<?php

class Filme {

    private $titulo;
    private $diretor;
    private $anoLancamento;
    private $genero;

    


    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of diretor
     */
    public function getDiretor()
    {
        return $this->diretor;
    }

    /**
     * Set the value of diretor
     */
    public function setDiretor($diretor): self
    {
        $this->diretor = $diretor;

        return $this;
    }

    /**
     * Get the value of anoLancamento
     */
    public function getAnoLancamento()
    {
        return $this->anoLancamento;
    }

    /**
     * Set the value of anoLancamento
     */
    public function setAnoLancamento($anoLancamento): self
    {
        $this->anoLancamento = $anoLancamento;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     */
    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }
}
