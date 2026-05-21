<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

    <h2>Contato</h2>

    <form action="processa.php" method="post">

        <label>Nome:</label>
        <input type="text" name="nome" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Mensagem:</label>
        <textarea name="texto" rows="5" required></textarea>

        <input type="submit" value="Enviar">

    </form>

</div>

</body>
</html>