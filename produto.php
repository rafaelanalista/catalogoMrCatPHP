
<?php
$localhost="localhost";
$usuario ="root";
$senha = "vertrigo";
$banco = "mr";

$conn = mysqli_connect("$localhost", "$usuario", "$senha", "$banco") or die('nao foi possivel conectar');

$query = mysqlI_query($conn, "SELECT * FROM categorias");
$query2 = mysqlI_query($conn, "SELECT * FROM cores");




?>





























<html lang='pt-BR'>
	<head>
		<meta charset = UTF-8>
		<link rel=stylesheet type=text/css href=estilo_admin.css>
		<title>Area Administrativa</title>
	</head>
	
	<body>
		<div id=conteudo>
			<header>
				<img src=logo.png>
			</header>
			<br />
			<h2>Área Administrativa</h2>
			<a href=admin.php><h3>voltar ao menu</h3></a>
			<hr>
			<fieldset>
				<legend><h2>Cadastro de Produto</h2></legend>
<?php if(isset($_POST['upload'])){
$referencia = $_POST['txtref'];
$categoria= $_POST['tp_cat'];
$cor= $_POST['tp_cor'];


$pasta = 'uploads';
$permitido = array('image/jpg', 'image/jpeg', '
image/jpeg');
$img = $_FILES['img'];
$tmp = $img['tmp_name'];
$name = $img['name'];
$type = $img['type'];


$img2 = $_FILES['img2'];
$tmp2 = $img2['tmp_name'];
$name2 = $img2['name'];
$type2 = $img2['type'];



require ('funcao.php');


if(!empty($name) && in_array($type, $permitido)){
	$nome = 'rafael-'.md5(uniqid(rand(), true)).'.jpg';
	upload($tmp, $nome, 500, $pasta);

if(!empty($name2) && in_array($type2, $permitido)){
	$nome2 = 'rafael-'.md5(uniqid(rand(), true)).'.jpg';
	upload($tmp2, $nome2, 500, $pasta);


	$cadastraimg = mysqli_query($conn,"insert into produtos (referencia, codcategoria, id_cor, fotop, fotog) values ( '$referencia', '$categoria', '$cor', '$nome', '$nome2')");

}

	
	
	
	
	}else{
	echo "tipo de arquivo inv";
	}







}






?>
<form action="" method="post" enctype="multipart/form-data" name="upload">

<p>Informe a referencia do produto<input type="text" name="txtref" /></p>



Informe a categoria do poduto
 <select name="tp_cat">
 <option>Selecione  Categoria</option>
 
 <?php while($prod = mysqli_fetch_array($query)) { ?>
 <option value="<?php echo $prod['codcategoria']; ?>"><?php echo $prod['categoria']; ?></option>
 <?php } ?>
 </select>

<br><br>
Informe a cor do poduto
 <select name="tp_cor">
 <option>Selecione a cor</option>
 
 <?php while($corr = mysqli_fetch_array($query2)) { ?>
 <option value="<?php echo $corr['id_cor']; ?>"><?php echo $corr['cor']; ?></option>
 <?php } ?>
 </select>






<br>


<p>foto pequena<input type="file" name="img" /></p>
<p>foto grande<input type="file" name="img2" /></p>

<input type="submit" name="upload" value="Enviar" />

</form>

<br> <br>


