<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S4_R1_AT1</title>
</head>
<body>
    <?php 
        //Variaveis
        $anoFundacao = 2005;
        $anoAtual = 2026;
        $ganhosMensal = 50000;
        $gastosMensal = 20000;
        
        //Calculos
        $sobra = $ganhosMensal - $gastosMensal;
        $tempoEmpresa = $anoAtual - $anoFundacao;
        $temLucro = $sobra > 20000;

        //Exibicao
        echo "Tempo empresa: " . $tempoEmpresa . " anos";
        echo "<br>" . "Sobrou: " . $sobra . "R$";
        echo "<br>A empresa tem lucro maior que R$ 20.000? " . ($temLucro ? "Sim" : "Não");
    ?>
</body>
</html>