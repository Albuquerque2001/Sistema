<?php

session_start();

include 'connection.php';

$modo = "";
if (isset ($_POST['modo'])) {
	$modo = $_POST['modo'];
}

$_SESSION["nome"] = "";
if (isset($_POST['nome'])) {
	$_SESSION["nome"] = $_POST['nome'];
}

$_SESSION["senha"] = "";
if (isset($_POST['senha'])) {
	$_SESSION["senha"] = $_POST['senha'];
}

$_SESSION["cpf"] = "";
if (isset($_POST['cpf'])) {
	$_SESSION["cpf"] = $_POST['cpf'];
}

$_SESSION["rg"] = "";
if (isset($_POST['rg'])) {
	$_SESSION["rg"] = $_POST['rg'];
}

if ($modo == 'inserir') {
	$sql = "INSERT INTO cadastro (nome, senha, cpf, rg) 
	VALUES ('".$_SESSION["nome"]."', '".$_SESSION["senha"]."', '".$_SESSION["cpf"]."', '".$_SESSION["rg"]."')";
	$result = $conn->query($sql);
	if($result){
		echo "<script> alert('Cadastro realisado com sucesso!'); window.location = 'index.php'; </script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
</head>
<script
src="https://code.jquery.com/jquery-3.3.1.js"
integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
crossorigin="anonymous"></script>
<body id="body">
	<div class="caixa-cadastro">
		<form method="post" action="cadastro.php">
			<div class="img">
				<img src="Assets/GetSchoolLogo.png" alt="logo" width="60%">
			</div>
			<h2>Cadastro</h2>
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite seu nome" required>	
			<br>
			<br>
			<label>CPF: </label>
			<input type="text" name="cpf" placeholder="Digite seu CPF" required>
			<br>
			<br>
			<label>RG: </label>
			<input type="text" name="rg" placeholder="Digite sua RG" required>	
			<br>
			<br>
			<label>Senha: </label>
			<input type="password" name="senha" placeholder="Digite sua senha" required>	
			<br>
			<br>
			<input type="submit" value="Cadastrar">
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
	margin-top: 7%;
	padding-left: 2%;
	padding-bottom: 1%;
	margin-left: 35%;
	margin-right: 35%;
}
.img{
	text-align: center;
	margin-bottom: 1%;
	margin-top: 3%;
}
.Footpage{
	margin-top: 9%;
	font-size: 17px;
	color: black;
	width: 100%;
	height: 100%;	
	background-color: lightgray;
	text-align: center;
}
</style>