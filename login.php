<?php

session_start();

include 'connection.php';


$modo = "";
if (isset($_POST['modo'])) { 
	$modo = $_POST['modo'];
}

$nome = "";
if(isset($_POST['nome'])){
	$nome = $_POST['nome'];
	$_SESSION['nome'] = $nome;
}

$senha = "";
if(isset($_POST['senha'])){
	$senha = $_POST['senha'];
	$_SESSION['senha'] = $senha;
}

if ($modo == 'inserir') {
	$sql = "SELECT nome, senha FROM cadastro WHERE nome = '$nome' AND senha = '$senha'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	if($row){
		session_start();
		$_SESSION['nome']="$nome";
		header('Location: perfil.php');
	}
	else{
		echo "<script>alert('Login ou senha incorretos');</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

</head>
<script
src="https://code.jquery.com/jquery-3.3.1.js"
integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
crossorigin="anonymous"></script>
<body id="body">
	<div class="caixa-cadastro">
		<form method="post" action="login.php">
			<!-- <h1>Login</h1> -->
			<div class="img">
				<img src="Assets/GetSchoolLogo.png" alt="logo" width="60%">
			</div>
			<h2>Login</h2>
			<label>Nome: </label>
			<input type="text" name="nome" id="nome" placeholder="Digite seu nome" required>
			<br>
			<br>
			<label>Senha: </label>
			<input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>	
			<br>
			<br>
			<input type="submit" value="Login">
			<input type="hidden" name="modo" id="modo" value="inserir">
		</form>
	</div>

	<div class="Footpage">
		CBV Boa Viagem - Rua Professor Eduardo Wanderley Filho, 539
		<br>
		Telefone: (81) 3465.4444 / Email: atendimento@cbvweb.com.br
	</div>

	<script src="jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
		$('#body').css('background-color', 'green');
	</script>

</body>
</html>
<style type="text/css">
.caixa-cadastro{
	background: linear-gradient(lightgray, 	gray);
	border: solid black 5px;
	margin-top: 10%;
	text-align: center;
	padding-bottom: 1%;
	margin-left: 35%;
	margin-right: 35%;
}
.img{
	text-align: center;
	margin-bottom: 5%;
	margin-top: 3%;
}
.Footpage{
	margin-top: 11%;
	font-size: 17px;
	color: black;
	width: 100%;	
	background-color: lightgray;
	text-align: center;
}
</style>