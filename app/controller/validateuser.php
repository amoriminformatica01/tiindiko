<?php
session_start();
require_once __DIR__ . '/../../vendor/autoload.php';
class ControllerUser
{
    protected static $usercreate;
    protected static $controllerUser;
    protected  $nome;
    protected  $email;
    protected  $tel;
    protected  $senha;
    protected  $user_type;

    public static function postUser()
    {
        if (isset($_POST['CADASTRAR'])) {
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $tel = addslashes($_POST['tel']);
            $senha = addslashes($_POST['senha']);
            $senha = md5($senha);
            $user_type = $_POST['user_type'];
            self::$usercreate = UserCreate::Create($nome, $email, $tel, $senha, $user_type);
            if (isset($email)) {
                header("location:../../login");
            $_SESSION["UserExist"] = "O Usuário já existe!!! ";
            } else {
                header("location:../../login");
            $_SESSION["UserSuccess"] = "O Usuário Criado com sucesso!!! ";
            }
            
        }
    }
}
$controllerUser = ControllerUser::postUser();
