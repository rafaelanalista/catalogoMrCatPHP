<?php
	$localhost="localhost";
	$usuario ="root";
	$senha = "vertrigo";
	$banco = "mr";

	$conn = mysqli_connect("$localhost", "$usuario", "$senha", "$banco") or die('nao foi possivel conectar');
    
	
	$prod = $_GET['id'];
	
	
	
	$sql = mysqli_query($conn, "select * from PRODUTOS inner join categorias on produtos.codcategoria=categorias.codcategoria inner join cores on produtos.id_cor=cores.id_cor WHERE produtos.id=$prod");

	$caminho = "uploads/";
	    	?>

<html>
	<head>
		<link rel = "stylesheet" href="bootstrap/css/bootstrap.min.css">
		<meta charset='utf-8'>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>	
			<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
			<script type="text/javascript" src="scrip.js"></script>
			<script src='js/jquery-1.8.3.min.js'></script>
			<script src='js/jquery.elevatezoom.js'></script>

		
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
jjjçhjihuhçiuhiuhiu			

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
<?php
				$linha = mysqli_fetch_assoc($sql);
	$img = $caminho . $linha['fotop'];
	$imgg = $caminho . $linha['fotog'];
				?>
	    	<?php $nome = $linha['referencia'];?>
			<?php $cor = $linha['cor'];?>
	    	
	    	



 <img src=<?php echo $img ?> width=150 height=170 id="zoom_01" class="elevate-image" data-zoom-image="<?php echo $imgg?>"/>;
		
		
		<script>
    			$('#zoom_01').elevateZoom(); 
			</script>
			
			<br>
			<br>
			<br>
knlkkl~jk~jkjihihiohijio
			Cor: <b><?php echo $cor ?></b><br><br>
			Referência: <b><?php echo $nome;?></b>
			<script>
    			$('#zoom_01').elevateZoom(); 
			</script>
			<br><br>
			Descrição do produto:
			<b>
			</B>
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