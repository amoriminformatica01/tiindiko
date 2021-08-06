<?php
session_start();
require_once __DIR__ . '../../../vendor/autoload.php';
class logoutAdmin
{

  public static function desconnectAdmin()
    {
       
            unset(
            $_SESSION["nome"],
            $_SESSION["email"],
            $_SESSION["senha"]);
            $_SESSION["sairSucesso"] ="O Usuárion foi desconectado com sucesso do sistema!";
           header("location:../../admin");
        
    }
}
$logout = logoutAdmin::desconnectAdmin();
