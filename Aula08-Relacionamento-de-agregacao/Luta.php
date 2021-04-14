<?php
require_once 'Lutador.php';

class Luta {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

// Definido que : 
// So pode ser marcada lutas entre lutadores da mesma categoria
// Desafiado e desafiante devem ser lutadores diferentes
// So pode acontecer se estiver aprovada
// so pode ter como resultado a vitoria de um dos lutadores ou o empate
    public function marcarLuta($lutador1, $lutador2) {
        if ($lutador1->getCategoria() === $lutador2->getCategoria() && ($lutador1 != $lutador2)) {
            $this->aprovada = true;
            $this->desafiado = $lutador1;
            $this->desafiante = $lutador2;
        }
        else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante= null;
        }
    }
    
    public function lutar() {
        if ($this->aprovada) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = mt_rand(0, 2);

            switch ($vencedor) {
                case 0: 
                    echo "<p>Empate!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                break;
                case 1: 
                    echo "<p>" . $this->desafiado->getNome() . " venceu</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                break;
                case 2: 
                    echo "<p>" . $this->desafiante->getNome() . " venceu</p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                break;
            }
        } else {
            echo "<p> Luta nao pode acontecer </p>";
        }
    }

// Métodos especiais

    /**
     * Get the value of desafiado
     */ 
    public function getDesafiado()
    {
        return $this->desafiado;
    }

    /**
     * Set the value of desafiado
     *
     * @return  self
     */ 
    public function setDesafiado($desafiado)
    {
        $this->desafiado = $desafiado;

        return $this;
    }

    /**
     * Get the value of desafiante
     */ 
    public function getDesafiante()
    {
        return $this->desafiante;
    }

    /**
     * Set the value of desafiante
     *
     * @return  self
     */ 
    public function setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;

        return $this;
    }

    /**
     * Get the value of rounds
     */ 
    public function getRounds()
    {
        return $this->rounds;
    }

    /**
     * Set the value of rounds
     *
     * @return  self
     */ 
    public function setRounds($rounds)
    {
        $this->rounds = $rounds;

        return $this;
    }

    /**
     * Get the value of aprovada
     */ 
    public function getAprovada()
    {
        return $this->aprovada;
    }

    /**
     * Set the value of aprovada
     *
     * @return  self
     */ 
    public function setAprovada($aprovada)
    {
        $this->aprovada = $aprovada;

        return $this;
    }
}