<?php

require_once '../model/usuario.php';
require_once '../config/database.php';

class usuarioController
{
    public $usuario;
    public $conexao;

    public function conectar()
    {
        $this->conexao = new database();
        return $this->conexao->conectar();
    }

    public function cadastrar($email, $nome, $senha, $dataNasc, $endereco)
    {

        $this->conectar();
        $usuario = new Usuario();

        $query = $usuario->cadastrar();

        $stmt = $this->conexao->prepare($query);

        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        $stmt->bind_param('sssss', $email, $nome, $senhaHash, $dataNasc, $endereco);

        $stmt->execute();

        $stmt->close();

    }

}