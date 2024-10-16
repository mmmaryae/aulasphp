<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>

<body>

    <h1>Lista</h1>

    <?php

    // Array associativo
    $info = [
        // '=>' associação
        "nome" => "chapolin.colorado",
        "senha" => "123teste",
        "idade" => 30,
        "cidade" => "São Paulo",
        // sem colchetes não é um array
        "telefone" => ["11-2135-0300","11-91234-5678"]
    ];

    ?>

    <ol>

        <li> Nome de usuário: <?= $info["nome"] ?></li>

        <li>Idade: <?= $info["idade"] ?></li>

        <li>Cidade: <?= $info["cidade"] ?></li>

        <li>Telefones: <?= $info["telefone" ][1] ?></li>

    </ol>



</body>

</html>