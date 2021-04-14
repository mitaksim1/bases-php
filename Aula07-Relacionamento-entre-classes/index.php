<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07</title>
</head>
<body>
    <pre>
    <?php 
        require_once 'Lutador.php';

        $lutador = [];
    // Instanciaçao da classe Lutador
        $lutador[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 3, 1);
        $lutador[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
        $lutador[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
        $lutador[3] = new Lutador("Dead Code", "Australia", 28, 1.93, 81.6, 12, 0, 2);

        // $lutador[3]->perderLuta();
        // $lutador[3]->apresentar();
        // $lutador[3]->status();
        // print_r($lutador);

    // Instanciaçao da classe Luta
    $luta = new Luta();
    $luta->marcarLuta($lutador[0], $lutador[1]);
    $luta->lutar();
    print_r($luta);
    ?>
    </pre>
</body>
</html>