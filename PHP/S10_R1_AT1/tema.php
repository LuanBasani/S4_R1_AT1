<?php

if (isset($_GET["modo"])) {

    $modo = $_GET["modo"];

    setcookie("tema", $modo, time() + 3600, "/");
}

// força atualização
header("Location: " . $_SERVER["HTTP_REFERER"]);
exit;
?>