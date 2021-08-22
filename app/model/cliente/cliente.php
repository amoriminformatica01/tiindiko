<?php
require_once __DIR__ . '/../../../vendor/autoload.php';
class Cliente
{
    public static $connection;

    public static function view()
    {
        try {
            $connection = array();
            self::$connection = Connection::valuesConnection();
            $sdn = self::$connection->prepare("SELECT * FROM clientes");
            $sdn->execute();
            $connection = $sdn->fetchAll(PDO::FETCH_ASSOC);
            return $connection;
        } catch (PDOException $th) {
            echo "Erro no banco de dados" . $th->getMessage();
        }
    }
    public static function create($nome, $sobre_nome, $senha, $email, $telefone, $situacao, $data_de_cadastro)
    {
        try {
            self::$connection = Connection::valuesConnection();
            $sql = self::$connection->prepare("INSERT INTO clientes (nome, sobre_nome, senha, email, telefone, situacao, data_de_cadastro)
            VALUES(:nome, :sobre_nome, :senha, :email, :telefone, :situacao, :data_de_cadastro)");
            $sql->bindParam(':nome', $nome);
            $sql->bindParam(':sobre_nome', $sobre_nome);
            $sql->bindParam(':senha', $senha);
            $sql->bindParam(':email', $email);
            $sql->bindParam(':telefone', $telefone);
            $sql->bindParam(':situacao', $situacao);
            $sql->bindParam(':data_de_cadastro', $data_de_cadastro);
            $sql->execute();
        } catch (PDOException $th) {
            echo "Erro no banco de dados" . $th->getMessage();
        }
    }
    public static function update($id, $nome, $sobre_nome, $senha, $email, $telefone, $situacao, $data_de_cadastro)
    {
        try {
            self::$connection = Connection::valuesConnection();
            $sql = self::$connection->prepare(" UPDATE  clientes SET nome = :nome, sobre_nome = :sobre_nome , 
            email = :email,  senha = :senha, telefone = :telefone, situacao = :situacao, data_de_cadastro = :data_de_cadastro WHERE id = :id");
            $sql->bindParam(':id', $id);
            $sql->bindParam(':nome', $nome);
            $sql->bindParam(':sobre_nome', $sobre_nome);
            $sql->bindParam(':email', $email);
            $sql->bindParam(':senha', $senha);
            $sql->bindParam(':telefone', $telefone);
            $sql->bindParam(':situacao', $situacao);
            $sql->bindParam(':data_de_cadastro', $data_de_cadastro);
            $sql->execute();
        } catch (PDOException $th) {
            echo "Erro no banco de dados" . $th->getMessage();
        }
    }

    public static function delete($id)
    {
        try {
            self::$connection = Connection::valuesConnection();
            $sql = self::$connection->prepare(" DELETE FROM clientes WHERE id = :id");
            $sql->bindParam(':id', $id);
            $sql->execute();
        } catch (PDOException $th) {
            echo "Erro no banco de dados" . $th->getMessage();
        }
    }
    public function login()
    {
    }
}

//var_dump($teste = Cliente::update(2, 'João', 'bosco', 'erweff54343rw', 'super@test.com', '2299951294', 'Inativo', '22/09/2021'));
//var_dump($teste = Cliente::delete(3));