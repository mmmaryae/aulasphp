<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">

        <h1>Salários</h1>


        <?php
        // entrada de dados
        $salario = 400;
        $aumento1 = 1.15;
        $aumento2 = 1.10;
        $aumento3 = 1.05;

        //análise de dados

        if ($salario < 500) {
            $novosalario = $salario * $aumento1;
        } elseif ($salario <= 1000) {
            $novosalario = $salario * $aumento2;
        } else {
            $salario * $aumento3;
        }

        ?>

        <p>Antigo salário:<?= $salario ?> </p>
        <p>Novo salário:<?= $novosalario ?> </p>

        <hr>
        <!--  number_format formata o num -->
        <p>Salário antigo:R$<?= number_format($salario, 2, ",", ".") ?>
        </p>
        <p>Novo salário:R$
            <?= number_format($novosalario, 2, ",", ".") ?>
        </p>

    </div>









</body>

</html>