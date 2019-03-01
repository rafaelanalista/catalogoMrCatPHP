<?php
	$localhost="localhost";
	$usuario ="root";
	$senha = "vertrigo";
	$banco = "mr";

	$conn = mysqli_connect("$localhost", "$usuario", "$senha", "$banco") or die('nao foi possivel conectar');
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
			<h3><a href="admin.php">voltar ao menu</a></h3>
			<hr>
			<fieldset>
				<legend><h2>Cadastro de Categoria</h2></legend>
				<form  action="cadastrando_cor.php" method="post" >
					Informe a cor : <input type="text" name="txtcor"><br>
					<br>
					<input type="submit" values="cadastrar">
			</fieldset>	
				</form>

				<br>
				<table border=1>
					<th>Cores Cadastradas</th>
					<?php
						$resultado = "select * from cores";
						$resu = mysqli_query($conn, $resultado);
						while($linha = mysqli_fetch_array($resu)){
							echo "<tr>"."<td align=center>".$cor = $linha['cor']."</td>"."<td>"."excluir"."</td>"."</tr>";
						}
					?>
				</table>