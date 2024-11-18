<?php

require_once '../model/cadastro.php';
require_once '../config/database.php';

class cadastroController
{
    public $cadastro;
    public $conexao;

    public function conectar()
    {
        $this->conexao = new database();
        return $this->conexao->conectar();
    }

    public function cadastrar($email, $nome, $senha, $dataNasc, $endereco)
    {

        $this->conectar();
        $cadastro = new Cadastro();

        $query = $cadastro->cadastrar();

        $stmt = $this->conexao->prepare($query);

        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        $stmt->bind_param('sssss', $email, $nome, $senhaHash, $dataNasc, $endereco);

        $stmt->execute();

        $stmt->close();

    }

}