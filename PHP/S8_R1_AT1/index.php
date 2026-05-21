<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S8 R1 AT1</title>
</head>
<body>
    <?php 
    function checarLucro($gasto, $receita) {
        if ($receita > $gasto) {
            return "A empresa teve lucro.";
        } elseif ($receita < $gasto) {
            return "A empresa teve prejuízo.";
        } else {
            return "A empresa ficou no zero a zero.";
        }
    }

    function exibirEmpresa($nome, $anoFundacao) {
        return "Empresa: $nome, fundada em $anoFundacao.";
    }

    echo exibirEmpresa("Tech Solutions", 2010) . "<br>";
    echo checarLucro(5000, 7000) . "<br><br>";

    echo exibirEmpresa("Bia Lanches", 2018) . "<br>";
    echo checarLucro(3000, 2500) . "<br>";
    ?>

</body>
</html>