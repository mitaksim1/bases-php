<?php 

require_once 'Animal.php';

class Mamifero extends Animal {
    private $corPelo;

    public function locomover() {
        echo "<p> Correndo </p>";
    }

    public function alimentar() {
        echo "<p> Mamando </p>";
    }
    // método sobreposto da classe Animal
    public function emitirSom() {
        echo "<p> Som de mamifero </p>";
    }



    /**
     * Get the value of corPelo
     */ 
    public function getCorPelo()
    {
        return $this->corPelo;
    }

    /**
     * Set the value of corPelo
     *
     * @return  self
     */ 
    public function setCorPelo($corPelo)
    {
        $this->corPelo = $corPelo;

        return $this;
    }

}