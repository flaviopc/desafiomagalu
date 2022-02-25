<?php
require_once 'db/DbConnection.php';
require_once 'db/UsuarioRepository.php';

$conexao = DbConnection::retornaConexao();

$usuarioRepository = new UsuarioRepository($conexao);

$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';
$lembrar = $_POST['lembrar'] ?? false;

$result = $usuarioRepository->login($usuario, $senha);

if ($result != false) {
    if ($lembrar)
        setcookie("login", $usuario);
    header("Location: sucesso.php");
    die();
} else {
    header("Location: index.php?erro=1");
    die();
}
