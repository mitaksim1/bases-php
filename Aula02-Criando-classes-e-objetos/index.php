<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - POO</title>
</head>
<body>
    <?php 
        require_once 'Caneta.php';

        // Eu instancio a classe Caneta no objeto $caneta1;
        $caneta1 = new Caneta;
        $caneta1->cor = "Azul";
        $caneta1->ponta = 0.5;
        $caneta1->tampada = false;

        // Chamando este método eu modifico o atributo tampada ou destampada
        $caneta1->tampar();

        // Descomentar se quiser ver o codigo 
        // eu chamei o método rabiscar que esta dentro do objet $caneta1 que é uma insatncia da classe Caneta
        // quando eu chamo rabiscar(), o echo que coloquei dentro deve apareecer na tela
        // $caneta1->rabiscar();
        

        print_r($caneta1);
        echo "<br>";

        // Criando outro objet
        $caneta2 = new Caneta;
        $caneta2->cor = "Verde";
        $caneta2->carga = 50;
        $caneta2->tampar();
        print_r($caneta2);



    ?>
</body>
</html>