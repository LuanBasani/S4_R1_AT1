<?php
// Inicia a sessão
session_start();

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Remove espaços vazios
    $nome = trim($_POST["nome"]);
    $empresa = trim($_POST["empresa"]);

    // Verifica se os campos foram preenchidos
    if (!empty($nome) && !empty($empresa)) {

        // Salva o nome na sessão
        $_SESSION["usuario"] = $nome;

        // Salva empresa favorita em cookie por 1 hora
        setcookie("empresa", $empresa, time() + 3600, "/");

        // Redireciona para perfil
        header("Location: perfil.php");
        exit;
    }
}
?>

<?php include "header.php"; ?>

<h2>Bem-vindo ao sistema!</h2>

<p>Preencha seus dados:</p>

<form method="POST" action="index.php">

    <label>Seu nome:</label><br>
    <input type="text" name="nome" required><br><br>

    <label>Empresa favorita:</label><br>
    <input type="text" name="empresa" required><br><br>

    <button type="submit">Entrar</button>

</form>

<?php include "footer.php"; ?>