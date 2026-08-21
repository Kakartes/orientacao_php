<?php



class Quadrado{

    private $lado;

    
    /**
     * Get the value of lado
     */
    public function getLado()
    {
        return $this->lado;
    }

    /**
     * Set the value of lado
     */
    public function setLado($lado): self
    {
        $this->lado = $lado;

        return $this;
    }
}