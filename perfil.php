<?php

session_start();

include 'connection.php';
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<title>Perfil</title>
</head>
<script
src="https://code.jquery.com/jquery-3.3.1.js"
integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
crossorigin="anonymous"></script>
<body>
	
	<div class="op">
		<div class="img">
			<img src="Assets/GetSchoolLogo.png" alt="logo" width="90%">
		</div>
		
		 <div class="lateral">
			<h3> 
				<?php
				$loginp = $_SESSION['nome'];
				$senhap = $_SESSION['senha'];

				$sql = "SELECT * FROM cadastro WHERE nome='$loginp' AND senha='$senhap'";				
				$result = $conn->query($sql);
				$row = $result->fetch_assoc();
				while ($row) {
					echo "Bem vindo ".$row['nome']."!"."<br>"."<br>";
					echo "CPF: ".$row['cpf']."<br>";
					echo "RG: ".$row['rg']."<br>";
					$row = $result->fetch_assoc();
				}
				?>
			</h3>
		</div> 

		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Busque sua sala aqui" aria-label="Search">
			<button type="button" class="btn btn-success">Procurar</button>
		</form>

	</div>
	
	<table class="table">
		<thead>
			<tr>
				<th>Sala 1</th>
			</tr>
		</thead>
		<tbody>
			<tr>

				<!-- Fazer um update aqui também e não só um insert -->

				<?php

					$modo = "";
					if (isset ($_POST['modo'])) {
						$modo = $_POST['modo'];
					}

					$_SESSION["horaLigar"] = "";
					if (isset($_POST['horaLigar'])) {
						$_SESSION["horaLigar"] = $_POST['horaLigar'];
					}

					$_SESSION["horaDesligar"] = "";
					if (isset($_POST['horaDesligar'])) {
						$_SESSION["horaDesligar"] = $_POST['horaDesligar'];
					}

					$_SESSION["temperatura"] = "";
					if (isset($_POST['temperatura'])) {
						$_SESSION["temperatura"] = $_POST['temperatura'];
					}

					if ($modo == 'inserir') {
						$sql = "UPDATE horario_temperatura SET horaLigar = '".$_SESSION["horaLigar"]."', 
						horaDesligar = '".$_SESSION["horaDesligar"]."', 
						temperatura = '".$_SESSION["temperatura"]."' WHERE id = '1'";
						$result = $conn->query($sql);
						if($result){
							echo "<script> alert('Programado com sucesso!'); window.location = 'perfil.php'; </script>";
						}
					}

				?>

				<!-- Criar API -->
				
				<td><label>Manhã</label></td>
				<td>
					<form method="post" action="perfil.php">
						<td>Ligar: <input type="time" name="horaLigar"> </td>
						<td>Desligar: <input type="time" name="horaDesligar"> </td>
						<td>Temperatura: <input type="number" name="temperatura" min="16" max="30" step="1" value=""> 
						</td>
						<td>
						<input type="submit" value="Programar">
						<input type="hidden" name="modo" id="modo" value="inserir">
						</td>
					</form>
				</td>
				
			</tbody>
		</table>


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
		padding: 14px 25px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
	}
	a:hover, a:active {
		background-color: green;
	}
	.title{
		background: gray;
	}
	.table{
		background: white;
		margin: 2%;
		width: 96%;
	}
	.img{
		margin: 3%;
		float: left;
		width: 50%;
	}
	.login{
		margin-left: 6%;
	}
	.index{
		margin-left: 6%;
	}
	.opções{
		width: 50%;
		float: left;
		text-align: center;
	}
	.lateral{
		padding-top: 4%;
		padding-right: 3%;
		margin-bottom: 3%;
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