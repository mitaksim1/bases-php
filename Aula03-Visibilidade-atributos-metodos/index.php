<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - POO</title>
</head>
<body>
    <pre>
    <?php 
        require_once 'Caneta.php';

        // Eu instancio a classe Caneta no objeto $caneta1;
        $caneta1 = new Caneta;

        // Métodos publicos = posso modificar os atributos
        $caneta1->modelo = "BIC cristal";
        $caneta1->cor = "Azul";

        // Métodos privados e protegidos = erro ao tentar acessar 
        // $caneta1->ponta = "0.5";
        // $caneta->carga = "99";

        // O mesmo vale para os métodos
        $caneta1->rabiscar(); // Estou rabiscando...
        $caneta1->tampar(); // Fatal error
        
        print_r($caneta1);

        


    ?>
    </pre>
</body>
</html>