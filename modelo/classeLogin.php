<?php
class Login
{
    private $email;
    private $senha;

    public function getusuario()
    {
        return $this->usuario;
    }
    public function setNome($email)
    {
        $this->usuario = $email;
    }
    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    function FazerLogin($email, $senha)
    {
        $email_ = 'AgendaCina@gmail.com';
        $senha_ = '1234';
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;

        if (empty($_SESSION['email']) && empty($_SESSION['senha'])) {
            exit('E-mail ou senha vazio');
        } elseif (($_SESSION['email'] != $email_) || ($_SESSION['senha'] != $senha_)) {
            exit('E-mail ou senha não encontrado.');
        } else {
            header("Location:../visao/principal.php");
        }
    }

    function fazerLogout()
    {
        session_start();
        session_destroy(); 
        unset($_SESSION);
        header("Location:../visao/login.php");
    }
}
