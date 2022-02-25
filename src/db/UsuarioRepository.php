<?php

class UsuarioRepository
{
    private $conexao;

    function __construct($con)
    {
        $this->conexao = $con;
    }

    function login($usuario, $senha)
    {
        $sql = 'SELECT usuario, senha FROM tb_usuario WHERE usuario = :usuario AND senha = :senha LIMIT 1';
        $recuperar = $this->conexao->prepare($sql);
        $recuperar->bindValue(":usuario", $usuario);
        $recuperar->bindValue(":senha", $senha);
        $recuperar->execute();

        return $recuperar->fetch(PDO::FETCH_ASSOC);
    }
}
