<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decisões da Empresa</title>
</head>
<body>

    <h1>Análise da Empresa</h1>

    <?php
        // Dados da empresa
        $nomeEmpresa = "Bia Lanches";
        $anoFundacao = 2010;
        $anoAtual = 2026;
        $funcionarios = 20;
        $setor = "alimentação";
        $faturamentoAnual = 200000;
        $gastosAnuais = 100000;

        // Cálculos
        $tempoMercado = $anoAtual - $anoFundacao;
        $lucro = $faturamentoAnual - $gastosAnuais;

        // Mostrando dados principais
        echo "<h2>Empresa: $nomeEmpresa</h2>";
        echo "<p>Setor: $setor</p>";
        echo "<p>Tempo de mercado: $tempoMercado anos</p>";
        echo "<p>Funcionários: $funcionarios</p>";
        echo "<p>Lucro anual: R$ $lucro</p>";

        echo "<hr>";

        // Decisão sobre porte da empresa usando if / elseif / else
        if ($funcionarios <= 10) {
            echo "<p><strong>Porte da empresa:</strong> Pequeno porte</p>";
        } elseif ($funcionarios <= 50) {
            echo "<p><strong>Porte da empresa:</strong> Médio porte</p>";
        } else {
            echo "<p><strong>Porte da empresa:</strong> Grande porte</p>";
        }

        // Decisão sobre tempo de mercado
        if ($tempoMercado < 5) {
            echo "<p><strong>Tempo de mercado:</strong> Empresa nova no mercado</p>";
        } elseif ($tempoMercado <= 15) {
            echo "<p><strong>Tempo de mercado:</strong> Empresa em crescimento</p>";
        } else {
            echo "<p><strong>Tempo de mercado:</strong> Empresa consolidada</p>";
        }

        // Decisão sobre status financeiro
        if ($lucro > 0) {
            echo "<p><strong>Status financeiro:</strong> Empresa com lucro</p>";
        } elseif ($lucro == 0) {
            echo "<p><strong>Status financeiro:</strong> Empresa sem lucro e sem prejuízo</p>";
        } else {
            echo "<p><strong>Status financeiro:</strong> Empresa com prejuízo</p>";
        }

        // Decisão sobre o setor usando switch
        switch ($setor) {
            case "alimentação":
                echo "<p><strong>Tipo de setor:</strong> Empresa atua no setor de alimentos.</p>";
                break;

            case "tecnologia":
                echo "<p><strong>Tipo de setor:</strong> Empresa atua no setor de tecnologia.</p>";
                break;

            case "educação":
                echo "<p><strong>Tipo de setor:</strong> Empresa atua no setor educacional.</p>";
                break;

            default:
                echo "<p><strong>Tipo de setor:</strong> Setor não cadastrado.</p>";
                break;
        }
    ?>

</body>
</html>