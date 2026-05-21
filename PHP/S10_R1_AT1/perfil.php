<?php
// Inicia a sessão
session_start();

// Verifica se existe usuário logado
if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit;
}
?>

<?php require_once "header.php"; ?>

<h2>
    Olá,
    <?php echo htmlspecialchars($_SESSION["usuario"]); ?>!
</h2>

<p>Dados armazenados no sistema:</p>

<ul>

    <!-- Sessão -->
    <li>
        <strong>Usuário da sessão:</strong>

        <?php
        echo htmlspecialchars($_SESSION["usuario"]);
        ?>
    </li>

    <!-- Cookie -->
    <li>
        <strong>Empresa favorita:</strong>

        <?php
        if (isset($_COOKIE["empresa"])) {

            echo htmlspecialchars($_COOKIE["empresa"]);

        } else {

            echo "Cookie ainda não disponível.";
        }
        ?>
    </li>

</ul>

<?php require_once "footer.php"; ?>