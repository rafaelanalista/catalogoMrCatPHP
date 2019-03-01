<?php
	$localhost="localhost";
	$usuario ="root";
	$senha = "vertrigo";
	$banco = "mr";
	$conn = mysqli_connect("$localhost", "$usuario", "$senha", "$banco") or die('nao foi possivel conectar');
	$quantidade = 2;
	$pagina = (isset ($_GET['pagina']) ) ? (int) $_GET['pagina'] : 1;
	$inicio = ($quantidade * $pagina) - $quantidade;
    $categ = $_GET['ir1'];
?>
<html>
	<head>
		<style>
			.painel li {
				display: inline-block;
				vertical-align: top;
				width: 100px;
				margin: 1px;
				padding-bottom: 2px;
			}
			.painel {
				position:relative;
				right:70;
			}

		</style>

		<meta charset="utf-8"> 
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>	
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<script type="text/javascript" src="scrip.js"></script>
		<link rel="stylesheet" style type="text/css"  href="estilo.css">
	</head>
	<body>
         <div id="tudo">
         	<div id="topo">
				<a href="index.asp"><IMG SRC="LOGO.png"></a>
				<div id="top">
					<form action="buscando.asp" method="get">
						<input type="text" name="p" class="busca" placeholder="Digite a referência ou modelo do produto e dâ um busca!">
						<input type="submit" value="buscar" class="btn" onclick="submit();this.value='Carregando informações!'">
					</form>
				</div>
				<div class="sexo">
					<a href="index.asp">Women</a> | <a href="masculino.asp">Men</a>
				</div>
			</div>
			<br>
			<div id="esquerda">
				<?php 
				include("menu.php"); 
				?>
			</div>
			<div id="direito">
				<I>Women's Collection</I><BR>	
				<HR>

		<div class="painel">
			<ol>
				<?php
					$caminho = "uploads/";
					$mostrando = mysqlI_query($conn, "select * from produtos limit $inicio, $quantidade");
				?>
			<ol>
			<?php
				while($linha = mysqli_fetch_array($mostrando)){
				$img = $caminho . $linha['fotop'];
				$nome = $linha['referencia'];
			?>
				<li>
					<figure>
						<?php
							echo "<img src='$img' width=180 height=200 />";
						?>
						<figcaption> <?php echo $nome ?></figcaption>
					</figure>
				<li>
			<?php
			}?>
			</ol>
			<?php
				$sqltotal = "select * from PRODUTOS inner join categorias on produtos.codcategoria=categorias.codcategoria WHERE produtos.codcategoria=$categ";
				$qrtotal = mysqli_query($conn, $sqltotal);
				$numtotal = mysqli_num_rows($qrtotal);
				$totalpagina = ceil($numtotal/$quantidade);
				echo '<a href="?pagina=1">Primeira Página</a>';
				for($i = 1; $i <= $totalpagina; $i++){
					if($i == $pagina )
						echo $i ;
					else 
					$categ = $_GET['ir1'];
					$categ = $_GET['ir1']; 
					echo "<a href='categoria.php?categoria=$i&criterio=$categ'>".$i."</a> ";
				}
				echo "<a href=\"?pagina=$totalpagina\">Ultima Página</a>";
			?>
			</div>
		</div>
	 </div>
    </body>
</html>	