<?php
	$localhost="localhost";
	$usuario ="root";
	$senha = "vertrigo";
	$banco = "mr";
	$conn = mysqli_connect("$localhost", "$usuario", "$senha", "$banco") or die('nao foi possivel conectar');
	$prod = $_GET['ir1'];
	$sql = mysqli_query($conn, "delete  from PRODUTOS WHERE produtos.id=$prod");
		echo "registro excluido com sucesso";
?>