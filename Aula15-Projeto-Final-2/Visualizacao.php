<?php

require_once 'Video.php';
require_once 'Gafanhoto.php';

class Visualizacao {
    private $espectador;
    private $filme;

    public function __construct($espectador, $filme) {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotalAssistido($this->espectador->getTotalAssistido() + 1);
    }

    public function avaliar() {
        $this->filme->setAvaliacao(5);
    }

    public function avaliarNota($nota) {
        $this->filme->setAvaliacao($nota);
    }

    public function avaliarPorcentagem($porc) {
        $novaNota = 0;
        if ($porc <= 20) {
            $novaNota = 3;
        }
        elseif ($porc <= 50) {
            $novaNota = 5;
        }
        elseif ($porc <= 90) {
            $novaNota = 8;
        }
        else {
            $novaNota = 10;
        }

        $this->filme->setAvaliacao($novaNota);

    }
    /**
     * Get the value of espectador
     */ 
    public function getEspectador()
    {
        return $this->espectador;
    }

    /**
     * Set the value of espectador
     *
     * @return  self
     */ 
    public function setEspectador($espectador)
    {
        $this->espectador = $espectador;

        return $this;
    }

    /**
     * Get the value of filme
     */ 
    public function getFilme()
    {
        return $this->filme;
    }

    /**
     * Set the value of filme
     *
     * @return  self
     */ 
    public function setFilme($filme)
    {
        $this->filme = $filme;

        return $this;
    }
}