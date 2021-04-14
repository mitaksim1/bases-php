<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 Herança</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Pessoa.php';
        require_once 'Aluno.php';
        require_once 'Professor.php';
        require_once 'Funcionario.php';

        $pessoa1 = new Pessoa;
        $pessoa2 = new Aluno;
        $pessoa3 = new Professor;
        $pessoa4 = new Funcionario;

        $pessoa1->setNome("Carol");
        $pessoa2->setNome("Dani");
        $pessoa3->setNome("Carla");
        $pessoa4->setNome("Susan");

        $pessoa2->setCurso("Informatica");
        $pessoa3->setSalario("2500.75");
        $pessoa4->setSetor("Estoque");
        $pessoa1->fazerAniver(20);

    // Teste so pra mostrar que metodos proprios nao sao acessiveis
        // $pessoa1->receberAumento(550.20);
        // $pessoa2->mudarTrabalho();
        $pessoa2->cancelarMatricula();
        

        print_r($pessoa1);
        print_r($pessoa2);
        print_r($pessoa3);
        print_r($pessoa4);


    ?>
    </pre>
</body>
</html>