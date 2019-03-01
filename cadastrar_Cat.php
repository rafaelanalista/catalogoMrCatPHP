<?php
	$localhost="localhost";
	$usuario ="root";
	$senha = "vertrigo";
	$banco = "mr";
	$conn = mysqli_connect("$localhost", "$usuario", "$senha", "$banco") or die('nao foi possivel conectar');
	$query = mysqlI_query($conn, "SELECT * FROM tipo");
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
			<form  action="cadastrando_cat.php" method="post" >
				Informe a categoria do produto : <input type="text" name="txtcategoria"><br>
				<label for="">Selecione tipo de produto</label>
				<select name="tp">
					<option>Selecione...</option>
					 <?php while($prod = mysqli_fetch_array($query)) { ?>
					 <option value="<?php echo $prod['codtipo']; ?>"><?php echo $prod['tipo']; ?></option>
					 <?php } ?>
				</select>
				<br>
				<input type="submit" values="cadastrar">


			</form>
