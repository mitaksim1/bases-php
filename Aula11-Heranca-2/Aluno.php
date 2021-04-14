<?php

require_once 'Pessoa.php';

// se a classe fosse final class, a classe Bolsista nao poderia ser filha de Aluno
// pois, classes finais nao podem ter filhos
class Aluno extends Pessoa {
    private $matricula;
    private $curso;

    // se a funcao fosse final function a classe Bolsista nao poderia sobrecrever este método, 
    // pois funcoes finais nao podem ser sobrescritas
    public function pagarMensalidade() {
        // como a classe Aluno é filha da classe Pessoa podemos acessar o nome diretamente
        echo "<p>Pagando a mensalidade do aluno $this->nome <p>";
    }

    /**
     * Get the value of matricula
     */ 
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     *
     * @return  self
     */ 
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get the value of curso
     */ 
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     *
     * @return  self
     */ 
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }
}