<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
</head>
<body>
	
	<div class="op">
		<div class="img">
			<img src="Assets/GetSchoolLogo.png" alt="logo" width="50%">
		</div>
		<div class="opções">
			<div class="cadastro">
				<a href="cadastro.php">Cadastro</a>
			</div>
			<div class="login">
				<a href="login.php">Login</a>
			</div>	
		</div>
		<div class="lateral">
			<h1>Sistema de automação de Ar Condicioandos do Colégio CBV</h1>
			<p> Sistema de automação de ar condicionados via web [protótipo inicial].
			<br>Desenvolvido pela Poli Junior Engenharia.</p>			
		</div>
	</div>
	<div class="Footpage">
		CBV Boa Viagem - Rua Professor Eduardo Wanderley Filho, 539
		<br>
		Telefone: (81) 3465.4444 / Email: atendimento@cbvweb.com.br
	</div>

</body>
</html>

<style type="text/css">
body{
	background: linear-gradient(lightgreen, green);
}
a:link, a:visited {
	background-color: ;
	border: solid green;
	color: black;
	font-size: 21px;
	padding: 10px 20px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
}
a:hover, a:active {
	background-color: green;
}
.img{
	margin: 3%;
	text-align: center;
}
.cadastro{
	margin-top: 12%;
}
.login{
	margin: 5%;
}
.opções{
	width: 30%;
	float: left;
	text-align: center;
}
.lateral{
	margin-top: 5%;
	font-size: 20px;
	padding-right: 3%;
}
.Footpage{
	margin-top: 5%;
	font-size: 17px;
	color: black;
	width: 100%;
	height: 100%;	
	background-color: lightgray;
	text-align: center;
}
</style>