<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Funcionários</title>
</head>
<body>

    <h1>Relatório Automático de Funcionários</h1>

    <?php
    // Lista de funcionários da empresa
    $funcionarios = [
        ["nome" => "Ana", "cargo" => "Analista", "salario" => 2500],
        ["nome" => "Carlos", "cargo" => "Desenvolvedor", "salario" => 3200],
        ["nome" => "Mariana", "cargo" => "Gerente", "salario" => 5000],
        ["nome" => "João", "cargo" => "Estagiário", "salario" => 1200]
    ];

    // Laço de repetição para mostrar todos os funcionários
    for ($i = 0; $i < count($funcionarios); $i++) {

        echo "<h3>Funcionário " . ($i + 1) . "</h3>";
        echo "<p>Nome: " . $funcionarios[$i]["nome"] . "</p>";
        echo "<p>Cargo: " . $funcionarios[$i]["cargo"] . "</p>";
        echo "<p>Salário: R$ " . $funcionarios[$i]["salario"] . "</p>";

        // Lógica integrada com if
        if ($funcionarios[$i]["salario"] >= 3000) {
            echo "<p>Status: Salário acima da média inicial.</p>";
        } else {
            echo "<p>Status: Salário dentro da média inicial.</p>";
        }

        echo "<hr>";
    }
    ?>

</body>
</html>