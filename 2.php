<?php
	$localhost="localhost";
	$usuario ="root";
	$senha = "vertrigo";
	$banco = "mr";

	$conn = mysqli_connect("$localhost", "$usuario", "$senha", "$banco") or die('nao foi possivel conectar');
?>
<html>
	<head>
		<link rel = "stylesheet" href="bootstrap/css/bootstrap.min.css">
		<meta charset='utf-8'>
		
		<style>

			.col-sm-3{
				background-color:;
			}

			.col-sm-12{
				background-color:;
			}

			.busca{
				height:50;
				width:500;
			}

			form{
				text-align:center;			
			}
		</style>
	
	
	</head>

	
	<body>
	
			
		<div class="container-fluid">
			<div class="row">

				<div class="col-sm-12">
					<a href="index.asp"><IMG SRC="LOGO.png"></a>
					<div id="top">
						<form id="form-pesquisa" action="busca.php" method="post">
							<input type="text" name="pesquisa" id="pesquisa" class="busca" placeholder="Digite a referência ou modelo do produto e dâ um busca!">
							<input type="submit" name="enviar" value="Pesquisar" class="btn" >
						</form>
				</div>
					
				<a href=index.php>Home <span class="glyphicon glyphicon-home"></a>
				<button type="button" class="btn btn-primary">Masculino</button>
			</div>
	  
	  
			<div class="col-sm-2">
				<?php 
					include("menu.php"); 
				?>
			</div>
		
			
			<div class="col-sm-8">
				<div class="resultados">
					<h1 id="paises">+de 990 produtos cadastrados</h1>
				</div>
			</div>
	  </div>
	</div>

	</body>
		<!--vou chamar o jquery apos o body..-->
		<script src="jquery-2.2.3.min.js" type="text/javascript"></script>
		<script src="jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
		<script src="configdatas.js" type=text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="jquery-ui/jquery-ui.min.js">
		
		
				<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>	
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<script type="text/javascript" src="functions.js"></script>


	<script type="text/javascript" src="scrip.js"></script>	
		
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
		
		
		

		

</html\>