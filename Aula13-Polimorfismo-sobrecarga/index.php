<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13 Polimorfismo sobrecarga</title>
</head>
<body>
    <pre>
    <?php 
        require_once 'Animal.php';
        require_once 'Mamifero.php';
        require_once 'Lobo.php';
        require_once 'Cachorro.php';

        $animal = new Mamifero();
        $animal->emitirSom();
        print_r($animal);

        $animal1 = new Cachorro();
        $animal1->emitirSom();
        //$animal1->reagirDono(true);
        //$animal1->reagirFrase("Sai");
        $animal1->reagirIdadePeso(2, 12.5);
        $animal1->reagirIdadePeso(17, 4.5);
    ?>
    </pre>
</body>
</html>