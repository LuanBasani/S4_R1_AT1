<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados da Empresa</title>
</head>
<body>

    <h1>Lista de Funcionários da Empresa</h1>

    <?php
    // Array associativo com dados dos funcionários
    $funcionarios = [
        [
            "nome" => "Ana Paula",
            "cargo" => "Analista",
            "setor" => "Financeiro"
        ],
        [
            "nome" => "Carlos Henrique",
            "cargo" => "Desenvolvedor",
            "setor" => "Tecnologia"
        ],
        [
            "nome" => "Mariana Souza",
            "cargo" => "Gerente",
            "setor" => "Administração"
        ]
    ];

    // Percorrendo o array com foreach
    foreach ($funcionarios as $funcionario) {
        echo "<h3>Funcionário</h3>";
        echo "<p>Nome: " . $funcionario["nome"] . "</p>";
        echo "<p>Cargo: " . $funcionario["cargo"] . "</p>";
        echo "<p>Setor: " . $funcionario["setor"] . "</p>";
        echo "<hr>";
    }
    ?>

</body> 
</html>