<?php


require_once("Estado.php");

class Cidade{

    private $nome;
    private $qtdHabitantes;
    private $altitude;
    private Estado $estado;

    




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
     * Get the value of qtdHabitantes
     */
    public function getQtdHabitantes()
    {
        return $this->qtdHabitantes;
    }

    /**
     * Set the value of qtdHabitantes
     */
    public function setQtdHabitantes($qtdHabitantes): self
    {
        $this->qtdHabitantes = $qtdHabitantes;

        return $this;
    }

    /**
     * Get the value of altitude
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * Set the value of altitude
     */
    public function setAltitude($altitude): self
    {
        $this->altitude = $altitude;

        return $this;
    }

    /**
     * Get the value of estado
     */
    public function getEstado(): Estado
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     */
    public function setEstado(Estado $estado): self
    {
        $this->estado = $estado;

        return $this;
    }
}