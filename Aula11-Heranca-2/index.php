<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11 Herança 2</title>
</head>
<body>
    <pre>
    <?php 
        require_once 'Aluno.php';
        require_once 'Bolsista.php';
        require_once 'Professor.php';
        require_once 'Tecnico.php';

        $tecnico = new Tecnico();
        $tecnico->setRegistroProfissional(25625);
        $tecnico->setNome('Pascoal');
        $tecnico->pagarMensalidade();
        $tecnico->praticar();
    /*
        $professor = new Professor();
        $professor->setNome("Federico");
        $professor->setEspecialidade("Matematica");
        $professor->setSalario(2000);
        $professor->receberAumento(500);
    
        $aluno = new Aluno();
        $aluno->setNome("Pedro");
        $aluno->setMatricula(1111);
        $aluno->setIdade(16);
        $aluno->setSexo("Masculino");
        $aluno->setCurso("Informatica");
        $aluno->pagarMensalidade();

        $bolsista = new Bolsista();
        $bolsista->setMatricula(1112);
        $bolsista->setNome("Jubileu");
        $bolsista->setBolsa(12.5);
        $bolsista->setCurso("Administraçao");
        $bolsista->setIdade(17);
        $bolsista->renovarBolsa();
        $bolsista->pagarMensalidade();
        
        $visitante = new Visitante();
        $visitante->setNome("Alex");
        $visitante->setIdade(25);
        $visitante->setSexo("Masculino");
    */
        print_r($tecnico);  
        
    ?>
    </pre>
</body>
</html>