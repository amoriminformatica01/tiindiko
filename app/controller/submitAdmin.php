<?php
session_start();
require_once __DIR__ . '../../../vendor/autoload.php';
class SubmitAdmin
{
    public $conn;
    public static $UserLogon;
    public static $submitLogin;
    public static function logon()
    {
        if (isset($_POST['LOGAR'])) {
            if ((isset($_POST['email'])) && (isset($_POST['senha']))) {
                $email = addslashes($_POST['email']);
                $senha = addslashes($_POST['senha']);
                //$senha = md5($senha);
                self::$UserLogon = UserAdmin::Logon($email, $senha);
                $conn = self::$UserLogon;
                if ($conn) {
                    $_SESSION['nome']  = $_POST['nome'];
                    $_SESSION['sobre_nome']  = $_POST['sobre_nome'];
                    $_SESSION['email']  = $_POST['email'];
                    $_SESSION['senha']  = $_POST['senha'];
                    header("location:../../administrativo");
                } else {
                    header("location:../../admin");
                    $_SESSION["LogonError"] = "Usuário ou Senha não coincidem, favor rever os campos.";
                }
            }
        }
    }
}
$submitLogin = SubmitAdmin::logon();
