<?php
require_once 'vendor/autoload.php';

//session_start();
//ob_start();

//spl_autoload_register(function($classe) {
//require_once "../classes/". $classe.".class.php";
//});

//include_once "../classes/config.php";
//date_default_timezone_set('America/Sao_Paulo');
//BD::conn();


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<title>Cadastro - Ti Indiko</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="public/images/icons/favicon.ico" />
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
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="app/controller/validateuser.php" method="POST"  enctype="multipart/form-data">
					<span class="login100-form-title">
						<img src="public/imgs/logo.png" width="200">
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="">
						<input class="input100" type="text" name="nome" placeholder="Nome" id="nome">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Por favor insira o seu e-mail">
						<input class="input100" type="text" name="email" placeholder="E-mail" id="email" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Telefone">
						<input class="input100" type="text" name="tel" placeholder="Telefone (WhatsApp)" id="tel"required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Por favor insira sua senha"required>
						<input class="input100" type="password" name="senha" placeholder="Senha" id="senha">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Por favor confirme sua senha">
						<input class="input100" type="password" name="cpass" placeholder="Confirme sua senha" id="cpass"required>
						<span class="focus-input100"></span>
					</div> <br>



					<select class="input100 validate-input" name="user_type" id="user_type"required>
						<option class="input100" value="notvalue" selected>Tipo de Conta</option>
						<option class="input100" value="usuarionormal">Usuário Normal</option>
						<option class="input100" value="profissional">Profissional</option>
					</select>

					<div class="text-right p-t-13 p-b-23"></div>

					<input type="checkbox" id="checkbox_termos" class="input100" style="width: 15px; height: 15px; float: left;"></input>
					<label for="checkbox_termos"><span style="float: left; padding-left: 8px; margin-top: -5px;">Concordo com os <a href="public/documents/Termos e Condições.pdf"><u>Termos de Usos</u></a></span></label>
					<br><br>

					<div class="container-login100-form-btn">
						<input type="hidden" name="acao" value="login">
						<input type="submit" name="CADASTRAR" id="CADASTRAR" value="CADASTRAR" onclick="cadastroUser();"  class="login100-form-btn">
					</div>
					</form>
					<div class="flex-col-c p-t-80 p-b-40">
						<span class="txt1 p-b-9">
							Já possui uma conta?
						</span>

						<a href="login" class="txt3">
							Fazer loguin!
						</a>
					</div>
			
			</div>
		</div>
	</div>

	<div id="resposta_createuser"></div>

	<script>
		function cadastroUser() {
			var nome = $('#nome').val();
			var email = $('#email').val();
			var tel = $('#tel').val();
			var senha = $('#senha').val();
			var cpass = $('#cpass').val();
			var typeUser = $('#user_type').val();
			var termoDeUso = document.getElementById('checkbox_termos');

			var check = null;
			if (termoDeUso.checked == true) {
				check = '1';
			} else {
				check = '0';
			}


			if (nome == '' || email == '' || tel == '' || senha == '' || cpass == '') {
				alert('Preencha todos os campos');
			} else {
			
		
				if (check == '1') {

					var parametros = {
						"createuser": 'create',
						"nome": nome,
						"email": email,
						"tel": tel,
						"senha": senha,
						"cpass": cpass,
						"user_type": user_type,
						"check": check
					};
					//$.ajax({
					//	data: parametros,
						//url: 'app/controller/submitLogon.php',
					//	type: 'post',
					//	beforeSend: function() {},
					//	success: function(r) {
							//$('#resposta_createuser').html(r);
						//	location('cu');
						//}
					//});
				} else {
					alert('Aceite os termos de uso');
				}
			}
		}
	</script>
	<script src="public/js/jquery-3.2.1.min.js"></script>
	<script src="public/js/animsition.min.js"></script>
	<script src="public/js/bootstrap/js/popper.js"></script>
	<script src="public/js/bootstrap/js/bootstrap.min.js"></script>
	<script src="public/js/select2.min.js"></script>
	<script src="public/js/moment.min.js"></script>
	<script src="public/js/daterangepicker.js"></script>
	<script src="public/js/countdowntime.js"></script>
	<script src="public/js/main.js"></script>
</body>

</html>