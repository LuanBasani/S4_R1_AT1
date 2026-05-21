<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$texto = $_POST["texto"];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Enviados</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

    <h2>Informações Enviadas</h2>

    <hr>

    <?php

        echo "Nome: $nome <br>";
        echo "Email: $email <br>";
        echo "Mensagem: $texto <br>";

    ?>

    <br><br>

    <a href="index.php">Voltar</a>

</div>

</body>
</html>