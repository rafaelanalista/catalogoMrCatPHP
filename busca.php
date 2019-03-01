
<?php
		
	$localhost="localhost";
	$usuario ="root";
	$senha = "vertrigo";
	$banco = "mr";

	$conn = mysqli_connect("$localhost", "$usuario", "$senha", "$banco") or die('nao foi possivel conectar');
	$pesquisa 	= $_POST['palavra'];
	$query = mysqlI_query($conn, "select * from produtos where referencia like '%$pesquisa%'");
	$caminho = "uploads/";
	?>
	
	<div id=dentro>	
		<tr>	
			<?php
				if(mysqlI_num_rows($query) <= 0){
					echo 'nada encontrado';
				}else{
					while($res = mysqlI_fetch_assoc($query)){
					$img = $caminho . $res['fotop'];
					$ref = $res['referencia'];
			?>

				<?php echo "<img src='$img' width=150 height=170 />"; 
				ECHO "&nbsp"."&nbsp"."&nbsp"."<a href=detalhes".".php"."?id=".$res['id'].">".$ref."</a>";
					}
				} 

			?>
			<br>
	
	

	</tr>
	</table>
	
	</div>		