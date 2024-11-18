<?php

require_once 'C:xampp/htdocs/Sistema-Login-Cadastro/controller/usuarioController.php';

    $acao = isset($_GET['acao']) ? $_GET['acao'] : '';

    switch ($acao) {
        case 'cadastrar':
            if (isset($_POST['nome'], $_POST['email'], $_POST['dataNasc'], $_POST['nome'], $_POST['senha'], $_POST['endereco']));
                $novoUsuario = new usuarioController();
                $novoUsuario->cadastrar($_POST['email'], $_POST['nome'], $_POST['senha'], $_POST['dataNasc'], $_POST['endereco']);
                break;
        
        default:
            # code...
            break;
    }