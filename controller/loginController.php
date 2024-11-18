<?php

require_once '../model/cadastro.php';
require_once '../config/database.php';

class loginController
{
    public $login;
    public $conexao;

    public function conectar()
    {
        $this->conexao = new database();
        return $this->conexao->conectar();
    }

    public function logar($email, $senha)
    {

        $this->conectar();
        $login = new Login();

        $query = $login->logar();

        $stmt = $this->conexao->prepare($query);

        $stmt->bind_param('sssss', $email, $nome, $senhaHash, $dataNasc, $endereco);

        $stmt->execute();

        $stmt->close();

    }

}