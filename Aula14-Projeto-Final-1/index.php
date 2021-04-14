<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14 - Projeto Final 1</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Gafanhoto.php';
        require_once 'Video.php';

        $video[0] = new Video("Aula 1 de POO");
        $video[1] = new Video("Aula 12 de PHP");
        $video[2] = new Video("Aula 15 de HTML5");


        $gafanhoto[0]= new Gafanhoto("Kenzo", 12, "M", "ken");
       
     
        print_r($video);
        print_r($gafanhoto);
    ?>
    </pre>
</body>
</html>