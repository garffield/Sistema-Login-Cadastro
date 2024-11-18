<?php

require_once './model/usuario.php';
require_once './config/database.php';

class loginController
{
    private $conexao;

    public function __construct() {
        
        $this->conexao = new database();
        $this->conexao->conectar();

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function login($email, $senha)
    {

        $consultaEmail = 'select * from usuario where email = ? limit 1;';

        $stmt = $this->conexao->prepare($consultaEmail);

        $stmt->bind_param('s', $email);
        
        $stmt->execute();

        $resultado = $stmt->get_result();
        
        if ($resultado->num_rows == 0) {
            $_SESSION['erro_login'] = "Usuário não encontrado";
            echo "<script>alert('Erro! Usuario ou Senha estão incorretos')</script>";
            header("Location: ./view/pageLogin.php");
            $stmt->close();
            exit();
        }
        
        $usuario = $resultado->fetch_all();
        $stmt->close();
        
        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['usuario_email'] = $usuario['email'];
            $_SESSION['usuario_id'] = $usuario['id_usuario'];
            header("Location: ./view/pageHome.php");
            exit();
        } else {
            $_SESSION['erro_login'] = "Senha ou email incorretos!";
            header("Location: ./view/pageLogin.php");
            exit();
        }
    }

    public function logout() {
        session_unset();
        session_destroy();
        header("Location: ../index.php");
        exit();
    }
}