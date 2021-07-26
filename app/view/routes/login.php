<?php
session_start();
require_once 'vendor/autoload.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<title>Login Administrativo Ti Indiko</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/animate.css">
	<link rel="stylesheet" type="text/css" href="public/css/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/select2.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="public/css/util.css">
	<link rel="stylesheet" type="text/css" href="public/css/main.css">
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="app/controller/submitLogon.php" method="POST" enctype="multipart/form-data">
					<span class="login100-form-title">
						<img src="public/imgs/logo.png" width="200">
					</span>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Por favor insira o seu e-mail">
						<input class="input100" type="text" name="email" placeholder="E-mail">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Por favor insira sua senha">
						<input class="input100" type="password" name="senha" placeholder="Senha">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">


						<a href="#" class="txt2">
							Esqueceu sua senha?
						</a>
					</div>

					<div class="container-login100-form-btn">
						<input type="hidden" name="acao" value="login">
						<input type="submit" class="login100-form-btn" name="LOGAR" value="LOGAR">
					</div>

					<div class="flex-col-c p-t-80 p-b-40">
						<span class="txt1 p-b-9">
							Ainda não possui uma conta?
						</span>

						<a href="cadastro" class="txt3">
							Cadastre-se agora!
						</a>
					</div>

					<?php
					if (isset($_SESSION['LogonError'])) {
						echo "<div id='myAlert' class='alert alert-danger alert-dismissible' role='alert'>";
						echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
						$_SESSION['LogonError'];
						echo  $_SESSION['LogonError'];
						unset($_SESSION['LogonError']);
					};
					?>
					<?php
					if (isset($_SESSION['sairSucesso'])) {
						echo "<div id='myAlert' class='alert alert-success alert-dismissible' role='alert'>";
						echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
						$_SESSION['sairSucesso'];
						echo $_SESSION['sairSucesso'];
						unset($_SESSION['sairSucesso']);
					};
					?>






				</form>
			</div>
		</div>
	</div>
	<script>
		$('#LogonError').on('closed.bs.alert', function() {
			// do something…
		})
		$('#sairSucesso').on('closed.bs.alert', function() {
			// do something…
		})
	</script>
	<script src="public/js/jquery-3.2.1.min.js"></script>
	<script src="public/js/animsition.min.js"></script>
	<script src="public/js/bootstrap/js/popper.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
	<script src="public/js/select2.min.js"></script>
	<script src="public/js/moment.min.js"></script>
	<script src="public/js/daterangepicker.js"></script>
	<script src="public/js/countdowntime.js"></script>
	<script src="public/js/main.js"></script>
</body>

</html>