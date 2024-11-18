<?php

require_once '../config/database.php';

class Login {
    

    public $email;

    private $conexao;

    
    public $senha;
    public $tabela = 'cadastro';

    public function __construct(){
       
    }

    public function logar() {
        return "select ....";
    }

}