<?php
// Inicia sessão
session_start();

// Remove dados da sessão
session_unset();
session_destroy();

// Redireciona
header("Location: index.php");
exit;
?>