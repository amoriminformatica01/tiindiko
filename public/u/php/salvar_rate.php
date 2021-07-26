<?php
include_once "../../classes/config.php";
include_once "../../classes/BD.class.php";
date_default_timezone_set('America/Sao_Paulo');
$pdo = new PDO(
    'mysql:host='.HOST.';dbname='.BD,
    USER,
    PASS,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4")
);

$dataAtual = date('Y-m-d H:i:s');

   if(isset($_POST['rate']) && $_POST['rate'] != '') {

      $id_user = $_POST['id'];  
      $rate = $_POST['rate'];
      $nome = $_POST['nome'];
      $comment = ucfirst(mb_strtolower($_POST['comment'], "utf-8"));

      $addAvaliacao = BD::conn()->prepare("INSERT INTO avaliacoes (id_user, rate, nome, comment, data) VALUES ('$id_user', '$rate', '$nome', '$comment', '$dataAtual')");
      $addAvaliacao->execute();
      if($addAvaliacao) {
         echo "<script>alert('Avaliação realizada com sucesso!');</script>";
      }

   }

?>
