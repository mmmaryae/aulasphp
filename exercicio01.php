<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>

<body>

    <h1>Lista</h1>


    <!-- Só assim para rodar cod PHP/ -->

<!-- Tirar o php e substituir por '=' só para chamar um recurso  -->

    <?php

    // Array associativo

    $info = [
        // '=>' associação
        "nome" => "chapolin.colorado",
        "senha" => "123teste",
        "idade" => 30,
        "cidade" => "São Paulo",
        // sem colchetes não é um array
        //"" para numeros que não vão somar
        "telefone" => ["11-2135-0300","11-91234-5678"]
    ];

    ?>


<h1>Array associativo</h1>
<!-- ao inves de numero é o nome que vc deu -->
    <ol>
 
        <li> Nome de usuário: <?= $info["nome"] ?></li>

        <li>Idade: <?= $info["idade"] ?></li>

        <li>Cidade: <?= $info["cidade"] ?></li>

        <li>Telefones: <?= $info["telefone" ][1] ?></li>

    </ol>
<hr>

<!-- Array numérico/indexado -->
<!-- Começa em 0,1,2,3,4,5... -->

<?php

$dados1 = [

"chapolin.colorado",
"123teste",
30,
"São Paulo",
["11-988678","11-967664"]
// idade sem "" pois pode calcular
];

?>

<h2>Array numérico</h2>
<!-- abrevido o php pq so vai mostar -->
<!-- Dois pares de colchetes poius são dois vetore, tipo dois no quadradinho ex: 1223, 1223 -->
 <!-- 1- [] Posição que se encontra 'linha' -->
  <!-- 2- [] Posição num dele 0,1,2--> 

<ol>
    <li> Nome: <?=$dados1[0]?>  </li>
    <li>Idade: <?=$dados1[2]?> anos </li>
    <li>Cidade: <?=$dados1[3]?></li>
    <li>Numero: <?=$dados1[4] [1]?></li>
</ol>


</body>

</html>