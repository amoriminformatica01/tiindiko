<?php
require_once __DIR__ . '/../../../vendor/autoload.php';
class Connection extends ValuesConfig
{
    protected static $valuesConfig;
    public  $sdn;
    public static function valuesConnection()
    {
        try {
            self::$valuesConfig = ValuesConfig::submitConfig();
            $sdn = new PDO('mysql:dbname=' . self::$db. ';host=' . self::$host, self::$root, self::$pass);
            $sdn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $sdn;
        } catch (PDOException $th) {
            echo "Erro ao acessar o banco de dados." . $th->getMessage();
        } catch (Exception $th) {
            echo "Erro Interno do Sistema" . $th->getMessage();
        }
    }
}
$connection = Connection::valuesConnection();
