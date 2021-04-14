<?php 

// Minha classe tem 5 atributos e três métodos
class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

// Métodos
    function rabiscar() {
        if ($this->tampada == true) {
            echo "<p>ERRO! Nao posso rabiscar!";
        } else {
            echo "<p>Estou rabiscando...</p>";
        }
        
    }

    function tampar() {
        $this->tampada = true;
    }

    function destampar() {
        $this->tampada = false;
    }
}