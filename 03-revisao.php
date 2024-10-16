<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão HTML e PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
<h1>Revisando o básico</h1>

<hr>

<?php
// criar duas variáveis e/ou constantes
// 



const NOME = "Chapolin Colorado";
$idade = 25;


// Exibir no html 1 frase da seguinte forma


// Olá meu nome é Chapolin Colorado e tenho 25 anos.

// Desafio:
//  1) o nome deve aparecer em itáliico e com cor diferente no texto 
// 2) A idade deve aparecer apenas com cor de fundo diferente.

?>

<!-- exibir o texto -->
<!-- coloca o = para n ter q escrever php echo -->
<!-- variavel <?=$vari?> -->
<!-- teg antes e depois do PHP '<i><?=NOME?></i> ' -->
<!-- class="text-danger" cor importada do boot -->
<!-- class="bg-warning" cor de fundo importando -->
<p>Olá! meu nome é <i class="text-danger"><?=NOME?></i>  e tenho <span class="bg-warning"><?=$idade?></span> anos.</p>






</body>
</html>