<?php

class database {
    const host = 'localhost';
    const database = 'LoginCadastro';
    const usuario = 'root';
    const senha = '';
    public $conexao;

    public function conectar(){
        $this->conexao = new mysqli(self::host, self::usuario, self::senha, self::database);
        if(!$this->conexao){
            echo "erro na conexao";
        } else{
            return $this->conexao;
        }
    }

    public function prepare($query){
        return $this->conexao->prepare($query);
    }

}