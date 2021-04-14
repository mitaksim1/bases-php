<?php 

// Minha classe tem 5 atributos e três métodos
class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

// Métodos
    public function rabiscar() {
        if ($this->tampada == true) {
            echo "<p>ERRO! Nao posso rabiscar!";
        } else {
            echo "<p>Estou rabiscando...</p>";
        }
        
    }
// Esse método é publico e faz referência ao atributo $tampada que é protegido
// eu nao posso acessar esse atributo diretamente, se quero mudar algo nele, devo passar por esse método que faz a mediaçao entre os dois
// meu acesso ao $tampada é protegido, mas meu acesso a seu intermediario método tampar() é publico
    public function tampar() {
        $this->tampada = true;
    }

    public function destampar() {
        $this->tampada = false;
    }
}