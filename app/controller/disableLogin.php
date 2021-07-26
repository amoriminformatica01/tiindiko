<?php
session_start();
require_once __DIR__ . '../../../vendor/autoload.php';
class logoutAdmin
{

    function __construct()
    {
       
            unset(
            $_SESSION['nome'],
            $_SESSION['sobre_nome'],
            $_SESSION['email']);
            $_SESSION['sairSucesso'] ="Deslogado com Sucesso!!!";
           header("location:../../login");
        
    }
}
$logout = new logoutAdmin();
