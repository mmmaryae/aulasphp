<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais no PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">

        <h1>Comandos condicionais no PHP</h1>
        <p><i>versão refatorada</i></p>
        <hr>

        <!-- echo mostra o resultado 
        //vai aparecer sempre se ficar assim 'echo "<p>O valor da variável é $numero </p>" pois não tem uma condição'
        //interfere no front-end-->



        <h2>Condicional simples</h2>

        <?php

        $numero = 500;



        if ($numero >= 100) {
        ?>

            <p>O valor da variável é <?= $numero ?> </p>
        <?php
        }
        ?>

        <hr>

        <h2>Condicional COMPOSTA</h2>

        <?php
        // Controle de Estoque 

        $produto = "TV";

        $qtdEmestoque = 10; // o que temos no momento

        $qtdCritica = 2; // mìnimo necessário

        ?>

        <h3>Produto: <?= $produto ?> </h3>
        <p><b>Estoque:</b> <?= $qtdEmestoque ?></p>

        <?php

        //3 situações possiveis encadeada 'else if'
        //Operadores RELACIONAIS
        //< / <=
        //Não precisa declarar uma variavel no php para usar

        if ($qtdEmestoque < $qtdCritica) {
        ?>

            <!-- //1-) Se a quantidade em estoque for abaixo da quantidade crítica, o sistema deve avisar e pedir pra repor. -->

            <p class='alert alert-danger'>É necessário repor!</p>
        <?php
        } else {
        ?>
            <!-- // 2-) Caso contrário, simplesmente avisar que o estoque está normal. -->

            <p class='alert alert-success'>Estoque normal!</p>
        <?php
        }
        ?>
        <hr>

        <h2>Condicional ENCADEADA</h2>

        <?php

        // Verificando o produto e determinando diferentes tipos de garantia (em anos).

        if ($produto == "Ultrabook") {
            $garantia = 5;
        } elseif ($produto == "Geladeira") {
            $garantia = 3;
        } elseif ($produto == "TV") {

            $garantia = 2;
        } else {
            $garantia = 1;
        }
        ?>

        <p><?= $produto ?> Tem garantia de <b><?= $garantia ?> anos</b></p>


        <hr>

        <h2>Condicional ENCADEADA
            usando switch/case</h2>

        <!-- switch > análise/ Para comparação direta-->
        <!-- versão diferente do else if -->
        <!-- Pode fazer uma comparação direta -->
        <!-- default > else -->
        <!-- oq para o if é '{}' e no switch é o "break "-->
        <?php

        switch ($produto) {


            case "Ultabook":
                $garantiaB = 5;
                break;
            case "Geladeira":
                $garantiaB = 3;
                break;
            case "TV":
                $garantiaB = 2;
                break;
            default:
                $garantiaB = 1;
                break;
        }

        ?>

        <p>Garantia de <?= $garantiaB ?> anos.</p>


    </div>












</body>

</html>