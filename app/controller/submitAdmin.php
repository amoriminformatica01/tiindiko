 <?php
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
                $senha = md5($senha);
                self::$UserLogon = UserAdmin::Logon($email, $senha);
                $conn = self::$UserLogon;
                if (!empty($conn)){
                    $_SESSION['nome'] = $conn['nome'];
                    $_SESSION['sobre_nome'] = $conn['sobre_nome'];
                    $_SESSION['email'] = $conn['email'];
                    header("location:../../administrativo");
                } else {
                    header("location:../admin");
                    $_SESSION["LogonError"] = "Usuário ou Senha não coincidem, favor rever os campos.";
                }
            }
        }
    }
}
$submitLogin = SubmitAdmin::logon();
