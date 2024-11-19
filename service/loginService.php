<?php

require_once 'C:xampp/htdocs/Sistema-Login-Cadastro/controller/loginController.php';

    $acao = isset($_GET['acao']) ? $_GET['acao'] : '';

    switch ($acao) {
        case 'login':
            if (isset($_POST['email'], $_POST['senha'])) {
                $loginController = new loginController();
                $loginController->login($_POST['email'], $_POST['senha']);
            }
        
        // case 'logout':
        //     if (isset($_POST['button']) && $_POST['button'] === 'logout') {
        //         $loginController = new loginController();
        //         $loginController->logout();
        //     }
        //     break;
        
        default:
            break;
    }