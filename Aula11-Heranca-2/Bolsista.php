<?php

require_once 'Aluno.php';

class Bolsista extends Aluno {
    private $bolsa;

    public function renovarBolsa() {
        echo "<p> Bolsa renovada </p>";
    }

    // Esta classe vai sobrescrever o método contido na classe mae, 
    // pois o bolsista pagara mais barato
    public function pagarMensalidade() {
        echo "<p> $this->nome é bolsista! Entao paga com desconto!";
    }
    
    /**
     * Get the value of bolsa
     */ 
    public function getBolsa()
    {
        return $this->bolsa;
    }

    /**
     * Set the value of bolsa
     *
     * @return  self
     */ 
    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;

        return $this;
    }
}