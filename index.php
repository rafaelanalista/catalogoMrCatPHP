


<?php
	$localhost="localhost";
	$usuario ="root";
	$senha = "vertrigo";
	$banco = "mr";

	$conn = mysqli_connect("$localhost", "$usuario", "$senha", "$banco") or die('nao foi possivel conectar');
?>
<html>
	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>	
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<script type="text/javascript" src="scrip.js"></script>
		<link rel="stylesheet" style type="text/css"  href="estilo.css">
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="functions.js"></script>

	<script>		
		
		$(function(){
			//jquery vai esconder o elemento da pagina
			$("#paises").hide();
			//jquery que ira mostrar o elemento oculto
			$("#paises").fadeIn(4000);
			$("#pesquisa").keyup(function(){
			var pesquisa = $(this).val();
			if(pesquisa != ''){
				var dados = {
				palavra : pesquisa
			}
			
			$.post('busca.php', dados, function(retorna){
				
				$(".resultados").html(retorna);
			});
		}
	});
	$("#form-pesquisa").submit(function(e){
	e.preventDefault();
	var pesquisa = $("#pesquisa").val();
	
		});
	
});

				
		</script>
		<link rel="stylesheet" style type="text/css"  href="estilo.css">
	</head>
		<body>
         <div id="tudo">
         	<div id="topo">
				<a href="index.asp"><IMG SRC="LOGO.png"></a>
				<div id="top">
					<form id="form-pesquisa" action="busca.php" method="post">
						<input type="text" name="pesquisa" id="pesquisa" class="busca" placeholder="Digite a referência ou modelo do produto e dâ um busca!">
						<input type="submit" name="enviar" value="Pesquisar" class="btn" >
					</form>
				</div>
				<div class="sexo">
					<a href="index.asp">Women</a> | <a href="masculino.asp">Men</a>
				</div>
			</div>
			<br>
			<div id="esquerda">
				<?php include("menu.php");?>
			</div>
			<div class="resultados">
				<h1 id="paises">+de 990 produtos cadastrados</h1>
			</div>


		</div>
    </body>
</html>	