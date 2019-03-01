<html>
	<head>
		<SCRIPT>
			function confirm_delete(){
				return confirm ("Tem certeza que deseja excluir?")
			 }
		 </script>
	</head>
		<body>
			<?php
				$localhost="localhost";
				$usuario ="root";
				$senha = "vertrigo";
				$banco = "mr";
				$conn = mysqli_connect("$localhost", "$usuario", "$senha", "$banco") or die('nao foi possivel conectar');
			?>
			<?php
				$caminho = "uploads/";
				$mostrando = mysqli_query($conn, "SELECT * FROM produtos ");
			?>
			<?php
				while($linha = mysqli_fetch_array($mostrando)){
					$img = $caminho . $linha['fotop'];
					$nome = $linha['referencia'];
					$cod = $linha['id'];
			?>
			<?php
				echo "<img src='$img' width=180 height=200 />";
				ECHO "&nbsp"."&nbsp"."&nbsp"."<a href=del".".php"."?ir1=".$cod.">".$nome."</a>"."<br>"."<br>";
			?>

			<?php
			}?>
		 
	</body>
 </html>