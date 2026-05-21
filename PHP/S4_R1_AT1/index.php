<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados de Empresa</title>
</head>
<body>
    <?php 
    // Dados principais da empresa
    $nomeEmpresa = "Bia Lanches";
    $anoFundacao = 2010;
    $anoAtual = 2026;
    $gasto = 100000;
    $ganho = 200000;
    $funcionarios = 20;

    // Cálculo do lucro anual
    $lucro = $ganho - $gasto;

    // Cálculo do tempo de empresa
    $tempoEmpresa = $anoAtual - $anoFundacao;

    // Comparação para saber se a empresa é de médio porte
    $mediaEmpresa = $funcionarios >= 50;

    // Exibição dos dados na página
    echo "<h1>Nome da Empresa: " . $nomeEmpresa . "</h1>";

    echo "<p>Lucro anual: R$ " . $lucro . "</p>";

    echo "<p>Tempo de empresa: " . $tempoEmpresa . " anos</p>";

    echo "<p>Empresa de médio porte? " . ($mediaEmpresa ? "Sim" : "Não") . "</p>";
    ?>
</body>
</html>