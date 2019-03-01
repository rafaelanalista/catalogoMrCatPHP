<?php
	$query = mysqlI_query($conn, "SELECT * FROM CATEGORIAS WHERE CODTIPO = 6");
	$query2 = mysqli_query($conn, "select * from categorias where codtipo = 3");
	$query3 = mysqli_query($conn, "select * from categorias where codtipo = 2");
?>


<style>
  .accordion-toggle {cursor: pointer;}
  .accordion-content {display: none;}
  .accordion-content.default {display: block;}
</style>





    <div id="accordion">
		<h4 class	="accordion-toggle">SAPATOS</h4>
			<div class="accordion-content">
	    	<?php
	    		while($linha = mysqli_fetch_array($query)){
	    			$nome = $linha['categoria'];	


	    			
	    				

	    				ECHO "&nbsp"."&nbsp"."&nbsp"."<a href=categoria".".php"."?ir1=".$linha['codcategoria'].">".$nome."</a>"."<br>"."<br>";
	    			  
	    		}
	    	?>

		</div>
		<h4 class="accordion-toggle">BOLSAS</h4>
		<div class="accordion-content ">
	    	<?php
	    		while($linha = mysqli_fetch_array($query2)){
	    			$bolsa = $linha['categoria'];
	    			ECHO "&nbsp"."&nbsp"."&nbsp".$bolsa."<br>"."<br>";
	    		}
	    	?>
		</div>
		<h4 class="accordion-toggle">ACESSÓRIOS</h4>
		<div class="accordion-content ">
		 	<?php
	    		while($linha = mysqli_fetch_array($query3)){
		    			$acessorio = $linha['categoria'];
		    			ECHO "&nbsp"."&nbsp"."&nbsp".$acessorio."<br>"."<br>";
		    		}
	    	?>

		</div>
			<h4 class="accordion-toggle">CORES</h4>
			<div class="accordion-content ">
		</div>
	</div>
  
	  
