<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Controle Remoto</title>
</head>
<body>
    <pre>
    <?php 
        require_once 'ControleRemoto.php';
        $controleRemoto1 = new ControleRemoto();
        $controleRemoto1->ligar();
        $controleRemoto1->maisVolume();
        $controleRemoto1->abrirMenu();
    ?>
    </pre>
</body>
</html>