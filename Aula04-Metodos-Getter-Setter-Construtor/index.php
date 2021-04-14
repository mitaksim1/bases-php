<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04</title>
</head>
<body>
    <pre>
    <?php 
        require_once 'Caneta.php';

        // Intanciar a classe Caneta
        $caneta1 = new Caneta("BIC", "Azul", 0.5);
        // Vantagem do construct é que eu posso instanciar a classe varias veze pra mudar os atributos
        $caneta2 = new Caneta("KKK", "Verde", 1.0);

        print_r($caneta1);
        print_r($caneta2);
        /*
        // modificando o atributo com o setter
        $caneta1->setModelo("BIC");
        // como o atributo é publico eu posso modificar também usando o atributo
        $caneta1->modelo = "Bic";
        // aqui o atributo é privado, nao posso modificar a ponta pelo atributo, somente pelo "intermediario" setponta()
        $caneta1->setPonta(0.5);
        // O getModelo() e o getPonta() vao pegar os valores que atribuimos apos a instanciaçao da classe
        print "Eu tenho uma caneta {$caneta1->getModelo()} de ponta {$caneta1->getPonta()}";
        */
    ?>
    </pre>
</body>
</html>

