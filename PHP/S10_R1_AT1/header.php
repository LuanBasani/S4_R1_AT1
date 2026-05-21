<?php

$tema = "claro";

if (isset($_COOKIE["tema"])) {
    $tema = $_COOKIE["tema"];
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sistema Empresa XYZ</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body class="<?php echo $tema; ?>">

<div class="container">

<h1>Sistema da Empresa XYZ</h1>

<nav>
    <a href="index.php">Início</a>
    <a href="perfil.php">Meu Perfil</a>
    <a href="logout.php">Sair</a>
</nav>

<br>

<a href="tema.php?modo=claro">
    <button>Modo Claro</button>
</a>

<a href="tema.php?modo=escuro">
    <button>Modo Escuro</button>
</a>

<hr>