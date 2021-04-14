<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 Polimorfismo</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Mamifero.php';
        require_once 'Reptil.php';
        require_once 'Peixe.php';
        require_once 'Ave.php';
        require_once 'Canguru.php';
        require_once 'Cachorro.php';
        require_once 'Cobra.php';
        require_once 'Tartaruga.php';
        require_once 'Goldfish.php';
        require_once 'Arara.php';

        $canguru = new Canguru();
        $canguru->setPeso(50);
        $canguru->locomover();
        $canguru->setCorPelo('Marrom');
        $cachorro = new Cachorro();
        $cachorro->locomover();
        $cachorro->emitirSom();
        $cachorro->enterrarOsso();
        print_r($canguru);
        print_r($cachorro);

    /*
        $animal1 = new Mamifero();
        $animal1->setPeso(50);
        $animal1->setIdade(2);
        $animal1->setMembros(4);
        $animal1->setCorPelo("Preto");
        $animal1->locomover();
        $animal1->alimentar();
        $animal1->emitirSom();
        print_r($animal1);

        $animal2 = new Reptil();
        $animal2->setPeso(20);
        $animal2->setIdade(10);
        $animal2->setMembros(0);
        $animal2->setCorEscama("Colorida");
        print_r($animal2);

        $animal3 = new Peixe();
        $animal3->setpeso(1);
        $animal3->setIdade(2);
        $animal3->setMembros(0);
        $animal3->setCorEscama("Cinza");
        $animal3->soltarBolha();
        print_r($animal3);
    */    
    ?>
    </pre>
</body>
</html>