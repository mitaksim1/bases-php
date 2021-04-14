<?php

class Caneta {
    public $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    // Com o método construtor tudo que for colocado dentro dele vai ser lido automaticamente desde que a classe for instanciada
    // Este método pode ser chamado dessa forma __construct() ou usando o nome da classe Caneta() {}
    public function __construct($modelo, $cor, $ponta) {
       $this->modelo = $modelo; // ou $this->setModelo($modelo);
       $this->cor = $cor;
       $this->ponta = $ponta;

    }  

    // os getters e setters sao meus intermediarios pra poder acessar os atributos e modifica-los
    /**
     * Get the value of ponta
     */ 
    public function getPonta()
    {
        return $this->ponta;
    }

    /**
     * Set the value of ponta
     *
     * @return  self
     */ 
    public function setPonta($ponta)
    {
        $this->ponta = $ponta;

        return $this;
    }

    /**
     * Get the value of cor
     */ 
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * Set the value of cor
     *
     * @return  self
     */ 
    public function setCor($cor)
    {
        $this->cor = $cor;

        return $this;
    }

    /**
     * Get the value of tampada
     */ 
    public function getTampada()
    {
        return $this->tampada;
    }

    /**
     * Set the value of tampada
     *
     * @return  self
     */ 
    public function setTampada($tampada)
    {
        $this->tampada = $tampada;

        return $this;
    }
}