<?php
require_once __DIR__ . '/../../../vendor/autoload.php';
class UserCreate
{
    public static $connection;
    protected static $usercreate;
    public  $sql;
    public static function Create($nome, $email, $tel, $senha, $user_type)
    {
        try {
            self::$connection = Connection::valuesConnection();
            $sql = self::$connection->prepare("INSERT INTO users_pro (nome, email, tel, senha, user_type)
            VALUES(:nome, :email, :tel, :senha, :user_type)");
            $sql->bindParam(':nome', $nome);
            $sql->bindParam(':email', $email);
            $sql->bindParam(':tel', $tel);
            $sql->bindParam(':senha', $senha);
            $sql->bindParam(':user_type', $user_type);
            $sql->execute();
        } catch (PDOException $th) {
            echo "Erro no banco de dados" . $th->getMessage();
        }
    }
}

