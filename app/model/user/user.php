<?php
require_once __DIR__ . '/../../../vendor/autoload.php';
class User
{
    public static $connection;
    protected static $usercreate;
    public  $sql;
    public static function LogonUser($email, $senha)
    {
        try {
            self::$connection = Connection::valuesConnection();
            $connection= array();
            $sql = self::$connection->prepare("SELECT * FROM  users_pro WHERE email = :email AND senha = :senha LIMIT 1");
            $sql->bindValue(':email', $email);
            $sql->bindValue(':senha', $senha);
            $sql->execute();
            $connection = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $connection;
        } catch (PDOException $th) {
            echo "Erro no banco de dados" . $th->getMessage();
        }
    }
    public static function ViewUser($email)
    {
        try {
            self::$connection = Connection::valuesConnection();
            $connection= array();
            $query = self::$connection->prepare("SELECT * FROM  users_pro WHERE email=:email");
            $query->bindValue(':email', $email);
            $query->execute(); 
            $connection = $query->fetch(PDO::FETCH_ASSOC);
            return $connection;
        } catch (PDOException $th) {
            echo "Erro no banco de dados" . $th->getMessage();
        }
    }
}