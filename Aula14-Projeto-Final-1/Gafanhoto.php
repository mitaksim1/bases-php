<?php

require_once 'Pessoa.php';
require_once 'Video.php';

class Gafanhoto extends Pessoa {
    private $login;
    private $totalAssistido;

    // parent::__construct : comme super en JS
    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totalAssistido = 0;
    }

    public function viuMaisUm() {
        $this->totalAssistido ++;
    }

    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of totalAssistido
     */ 
    public function getTotalAssistido()
    {
        return $this->totalAssistido;
    }

    /**
     * Set the value of totalAssistido
     *
     * @return  self
     */ 
    public function setTotalAssistido($totalAssistido)
    {
        $this->totalAssistido = $totalAssistido;

        return $this;
    }
}