<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05</title>
</head>
<body>
    <pre>
    <?php 
        require_once 'ContaBanco.php';

        // Instanciar a classe
        $contaBanco = new ContaBanco;
        $contaBanco->numConta = 35;
        $contaBanco->setDono("Miriam");
        $contaBanco->abrirConta("CC");
        // $contaBanco->fecharConta();
        $contaBanco->depositar(300);
        $contaBanco->sacar(300);
        // $contaBanco->pagarMensal();
        print_r($contaBanco);
    
    ?>
    </pre>
</body>
</html>