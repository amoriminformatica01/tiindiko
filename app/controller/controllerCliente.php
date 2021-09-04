

<?php
session_start();
require_once __DIR__ . '/../../vendor/autoload.php';
class ControllerCliente extends Cliente
{
    protected $nome;
    protected $sobre_nome;
    protected $email;
    protected $telefone;
    protected $situacao;
    protected $data_de_cadastro;
    protected static $clientCreate;
    protected static $clientUpdate;
    public  $controllerUser;
    protected static $user;


    public static function postCreate()
    {
        if (isset($_POST['Cadastrar'])) {
            $nome = addslashes($_POST['nome']);
            $sobre_nome = addslashes($_POST['sobre_nome']);
            $email = addslashes($_POST['email']);
            $telefone = addslashes($_POST['telefone']);
            $situacao = addslashes($_POST['situacao']);
            $data_de_cadastro = addslashes($_POST['data_de_cadastro']);
            self::$user = Cliente::viewId($email);
            $conn = self::$user;
            if (!empty($conn)) {
                header("location:../../clientes");
                $_SESSION["UserExist"] = "O Usuário já existe!!! ";
            } else {
                self::$clientCreate = Cliente::Create($nome, $sobre_nome, $email, $telefone, $situacao, $data_de_cadastro);
                header("location:../../clientes");
                $_SESSION["UserSuccess"] = "O Usuário Criado com sucesso!!! ";
            }
        }
    }

    public static function postUpdate()
    {
        if (isset($_POST['Alterar'])) {
            $nome = addslashes($_POST['nome']);
            $sobre_nome = addslashes($_POST['sobre_nome']);
            $email = addslashes($_POST['email']);
            $telefone = addslashes($_POST['telefone']);
            self::$clientUpdate = Cliente::update($nome, $sobre_nome, $email, $telefone);
           //header("location:../../clientes");
            $_SESSION["UserSuccess"] = "O Usuário Alterado com sucesso!!! ";
        }
    }
}
$controllerUser = ControllerCliente::postCreate();
$controllerUser = ControllerCliente::postUpdate();
