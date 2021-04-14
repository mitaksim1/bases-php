<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 Pratica</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Pessoa.php';
        require_once 'Livro.php';

        $pessoa = [];
        $pessoa[0] = new Pessoa("Miriam", 39, "Feminino");
        $pessoa[1] = new Pessoa("Kenzo", 12, "Masculino");
        $pessoa[0]->fazerAniver();
        print_r($pessoa[0]);

        $livro = [];
        $livro[0] = new Livro("Jane Eyre", "Charlotte Bronte", 300, 200, "Miriam");
        $livro[1] = new Livro("Anne Grey", "Anne Bronte", 200, 150, "Kenzo");
       
        print_r($livro[0]);
    ?>
    </pre>
</body>
</html>