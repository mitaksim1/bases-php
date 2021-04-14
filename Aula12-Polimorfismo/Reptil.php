<?php

require_once 'Animal.php';

class Reptil extends Animal {
    private $corEscama;
    // método sobreposto da classe Animal
    public function locomover() {
        echo "Rastejando";
    }

    public function alimentar() {
        echo "Comendo vegetais";
    }

    public function emitirSom() {
        echo "Som de reptil";
    }


    /**
     * Get the value of corEscama
     */ 
    public function getCorEscama()
    {
        return $this->corEscama;
    }

    /**
     * Set the value of corEscama
     *
     * @return  self
     */ 
    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;

        return $this;
    }
}