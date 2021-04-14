<?php
require_once 'Controlador.php';

class ControleRemoto implements Controlador {
// Atributos
    private $volume;
    private $ligado;
    private $tocando;

// Método especial :  __construct()
    public function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

// Métodos especiais : getters e setters
    /**
     * Get the value of volume
     */ 
    private function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set the value of volume
     *
     * @return  self
     */ 
    private function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get the value of ligado
     */ 
    private function getLigado()
    {
        return $this->ligado;
    }

    /**
     * Set the value of ligado
     *
     * @return  self
     */ 
    private function setLigado($ligado)
    {
        $this->ligado = $ligado;

        return $this;
    }

    /**
     * Get the value of tocando
     */ 
    private function getTocando()
    {
        return $this->tocando;
    }

    /**
     * Set the value of tocando
     *
     * @return  self
     */ 
    private function setTocando($tocando)
    {
        $this->tocando = $tocando;

        return $this;
    }

// Métodos abstratos    

    public function ligar() {
        // $this : referencia ao objeto que foi criado na hora da instanciaçao
        $this->setLigado(true);
    }
    public function desligar() {
        $this->setLigado(false);
    }
    public function abrirMenu() {
        // se o controle remoto estiver ligado, escrever SIM, senao escrever NAO
        echo $this->getLigado()?"<p>Esta ligado? : SIM <br>":"Esta ligado : NON <br></p>";
        echo $this->getTocando()?"Esta tocando? : SIM":"Esta tocando? : NON";
        echo "<br>Volume: " . $this->getVolume();
        // Pra colocar barrinhas simulando o volume
        for ($i=0; $i <=$this->getVolume(); $i+=10) {
            echo "|";
        }
        echo "<br>";
    }
    public function fecharMenu() {
        echo "<br> Fechando menu...";
    }
    public function maisVolume() {
        // se o controle estiver ligado, pegar o valor do volume e aumentar pra + 5
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        }
        else {
            echo "<p>Erro, nao posso aumentar o volume</p>";
        }
    }
    public function menosVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() -5);
        }
        else {
            echo "<p>Nao posso diminuir o volume</p>";
        }
    }
    public function ligarMudo() {
        // se o controle estiver ligado e o volume for superior a 0, mudar o volume pra 0
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }
    public function desligarMudo() {
        // se o controle estiver ligado e p volume for igual a 0, entao passar o volume pra 50
        if ($this->getLigado() && $this->getVolume == 0) {
            $this->setVolume(50);
        }
    }
    public function play() {
        // se o controle estiver ligado e estiver tocando, mudar o tocando pra verdadeiro
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        }
    }
    public function pause() {
        // se o controle estiver ligado e estiver tocando, passar o tocando pra falso
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }
}