<?php

class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

// Método especial
// Nesse exemplo, ficou definido que o saldo = 0 e o status = falso (conta começa fechada)
    public function __construct() {
        $this->saldo = 0;
        $this->status = false;
    }

// Métodos proprios

// Definido que se conta criada é:
// tipo CC = conta corrente, saldo inicial = 50
// tipo CP = conta poupança, saldo inicial = 150
// status = verdadeiro
    public function abrirConta($tipo) {
        $this->setTipo($tipo);
        $this->setStatus(true);

        if($tipo == "CC") {
            $this->saldo = 50; // poderia ter colocado setSaldo(50);
        } 
        elseif ($tipo = "CP") {
            $this->saldo = 150;
        }
    }

// Definido que pra fechar a conta :
// nao pode estar negativa,
// nao pode ter dinheiro dentro    
    public function fecharConta() {
        if ($this->saldo > 0) {
            print("Conta com dinheiro");
        } 
        elseif ($this->saldo < 0) {
            print("Conta em debito");
        } 
        else {
            $this->setStatus(false);
        }
    }  

// Definido que para depositar:
// A conta tem que estar aberta, status = verdadeiro    
    public function depositar($valor) {
       if ($this->status == true) { // poderia ter escrito if (getStatus == true) ou if (getStatus)
           $this->saldo = $this->saldo + $valor; // ou $this->setSaldo(getSaldo() + $valor);   
       }
       else {
           print("Impossivel fazer o deposito");
       }
    }

// Definido que para poder sacar :
// A conta tem que estar aberta
// Tenho que ter dinheiro na conta
// Nao posso tirar mais do que tenho na conta  
    public function sacar($valor) {
        if ($this->status == true) {
            if ($this->saldo > 0 && $valor <= $this->saldo) {
                $this->saldo = $this->saldo - $valor;
            }
            else {
                print("Você nao tem dinheiro suficiente na conta");
            }
        }
        else {
            print("Impossivel fazer um saque");
        }
    }

// Definido que a cada vez que o método for chamado :
// no tipo CC : 12 reais serao descontados
// no tipo CP : 20 reais serao descontados
    public function pagarMensal() {
        if ($this->tipo == "CC") {
            $this->saldo = $this->saldo - 12;
        }
        elseif ($this->tipo == "CP") {
            $this->saldo = $this->saldo - 20;
        }
       
    }

// Método especial
    /**
     * Get the value of saldo
     */ 
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set the value of saldo
     *
     * @return  self
     */ 
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of dono
     */ 
    public function getDono()
    {
        return $this->dono;
    }

    /**
     * Set the value of dono
     *
     * @return  self
     */ 
    public function setDono($dono)
    {
        $this->dono = $dono;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}