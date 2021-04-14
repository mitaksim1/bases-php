<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 15 - Projeto Final 2</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Gafanhoto.php';
        require_once 'Video.php';
        require_once 'Visualizacao.php';

        $video[0] = new Video("Aula 1 de POO");
        $video[1] = new Video("Aula 12 de PHP");
        $video[2] = new Video("Aula 15 de HTML5");

        $gafanhoto[0] = new Gafanhoto("Kenzo", 12, "M", "ken");
        $gafanhoto[1] = new Gafanhoto("Mimi", 39, "F", "mitaks");
        

        $v[0] = new Visualizacao($gafanhoto[0], $video[2]);

        $v[1] = new Visualizacao($gafanhoto[0], $video[0]);

       $v[0]->avaliar();
       // $v[1]->avaliarNota(7);
       $v[1]->avaliarPorcentagem(85);

        print_r($v);
    ?>
    </pre>
</body>
</html>