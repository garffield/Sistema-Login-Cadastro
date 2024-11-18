<?php

require_once '../config/database.php';

class Cadastro {
    

    public $email;

    private $conexao;

    public $nome;

    public $senha;

    public $dataNasc;
    public $endereco;
    public $tabela = 'cadastro';

    public function __construct(){
       
    }

    public function cadastrar() {
        return "insert into {$this->tabela} (email, nome, senha, dataNasc, endereco) values (?, ?, ?, ?, ?);";
    }

}