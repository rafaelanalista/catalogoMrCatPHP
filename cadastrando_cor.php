<?php
	$localhost="localhost";
	$usuario ="root";
	$senha = "vertrigo";
	$banco = "mr";
	$conn = mysqli_connect("$localhost", "$usuario", "$senha", "$banco") or die('nao foi possivel conectar');
	$cor = $_POST['txtcor'];
	$result = mysqli_query($conn, "insert into cores(cor) values ('$cor')");

?>











<html lang='pt-BR'>
	<head>
		<link rel=stylesheet type=text/css href=estilo_admin.css>
		<title>Area Administrativa</title>
	</head>
	
	<body>
		<div id=conteudo>
			<header>
				<img src="logo.png">
			</header>
			<br />
			<h2>Área Administrativa</h2>
			<h3><a href="cadastrar_cor.php">voltar ao menu</a></h3>
			<?php
			echo "cadastrado com sucesso";
			?>



