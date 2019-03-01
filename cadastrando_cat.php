<?php
	$localhost="localhost";
	$usuario ="root";
	$senha = "vertrigo";
	$banco = "mr";
	$conn = mysqli_connect("$localhost", "$usuario", "$senha", "$banco") or die('nao foi possivel conectar');
	$catgoria = $_POST['txtcategoria'];
	$tipo = $_POST['tp'];
	$query = mysqlI_query($conn, "insert into categorias(categoria, codtipo) values('$catgoria', '$tipo')");

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

			<?php
				echo "cadastrado com sucesso";?>
				<br>
				<a href=http:cadastrar_Cat.php>voltar a tela de cadastro de categoria</a>