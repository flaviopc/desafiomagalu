<?php

$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';
$lembrar = $_POST['lembrar'] ?? false;

if (strcmp($usuario, "magalu") == 0 && strcmp($senha, "m@galu123") == 0) {
    if ($lembrar)
        setcookie("login", $usuario);
    header("Location: sucesso.php");
    die();
} else {
    header("Location: index.php?erro=1");
    die();
}
