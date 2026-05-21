<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S3 R1 AT1</title>
    <style>
        /* Estilização básica da página */
        body {
            text-align: center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 
            'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
    </style>
</head>
<body>
    <?php 
    // Nome da empresa
    $nomeEmpresa = "Bia Lanches";

    // Ano em que a empresa foi fundada
    $fundacao = 2015;

    // Valor da empresa
    $valor = 200000;

    // Mostra se a empresa está ativa ou não
    $ativa = true;

    // Nome do funcionário do mês
    $funcionarioMes = "Igor Beltramo";

    // Mostra o nome da empresa como título principal
    echo "<h1>Nome da Empresa: $nomeEmpresa</h1>";

    // Mostra o valor da empresa
    echo "<h2>Valor da empresa: $valor</h2>";

    // Mostra o ano de fundação
    echo "<p>Fundação: $fundacao</p>";

    // Verifica se a empresa está ativa
    echo "<p>A empresa está :</p>" . ($ativa?"Ativa":"Desativada.");

    // Mostra o funcionário do mês
    echo "<p>Funcionário do mês: $funcionarioMes</p>";
    ?>
</body>
</html>