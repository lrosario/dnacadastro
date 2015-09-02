<?php
if(IsSet($_COOKIE["logado"])){}
else{
echo '<meta http-equiv="refresh" content="0;url=/">';
exit; 

}

if(isset($_GET['url'])){
  $url=$_GET['url'];
}
else {
  $url="";
}

$url=(empty($url))?"index":$url;


include 'application/controler/Produtos.php';
include 'application/controler/Categorias.php';
include 'application/controler/Retirantes.php';
include 'application/controler/Fornecedores.php';
include 'application/controler/Form.php';
include 'application/controler/Relatorios.php';
include 'application/controler/DB.php';

?>
<html>


<head>



<title>ALMOXARIFADO</title>
<style type="text/css">
@import url("styles/index.css");
@import url("styles/menu.css");
#apDiv1 {
	position: absolute;
	width: 145px;
	height: 115px;
	z-index: 1;
	left: 1108px;
	top: 35px;
	visibility: inherit;
}
</style>
<script type="text/javascript" src="application/js/jquery.min.js"></script>
<script type="text/javascript" src="application/js/menu.js"></script>
<script type="text/javascript" src="application/js/functions.js"></script>
</head>


<body>




<div id="Full">
<div id="Logo"><big><b>CONTROLE DE ESTOQUE</b></big>
<img src="img/logo-kanui.png" alt="Kanui" width="150" height="40" align="left"> <!-- LOGO KANUI -->
<img src="img/logo-tricae.png" alt="Kanui" width="150" height="40" align="right"> <!-- LOGO TRICAE -->



</div>
	<div id="Menu">
	<ul id="jsddm">
	<li><a href="main.php">Inicio</a>		
	</li>
	<li><a href="#">Produtos</a>
		<ul>
			<li><a href="main.php?url=categoria&acao=formcadastrocategoria">Cadastrar Categoria</a></li>
			<li><a href="main.php?url=produto&acao=formcadastro">Cadastrar Produtos</a></li>
			<li><a href="main.php?url=produto&acao=listar">Listar Produtos</a></li>
			<li><a href="main.php?url=categoria&acao=listar">Listar Categorias</a></li>
		</ul>
	</li>
	<li><a href="#">Estoque</a>
		<ul>
			<li><a href="main.php?url=estoque&acao=formcadastroentrada">Entrada de Material</a></li>
			<li><a href="main.php?url=estoque&acao=formcadastrosaida">Saida de Material</a></li>
		</ul>
	</li>
	<li><a href="#">Fornecedores</a>
		<ul>
			<li><a href="main.php?url=fornecedor&acao=formcadastro">Cadastrar Fornecedor</a></li>
			<li><a href="main.php?url=fornecedor&acao=listar">Listar Fornecedores</a></li>
		</ul>
	</li>
	<li><a href="#">Retirantes</a>
		<ul>
			<li><a href="main.php?url=retirante&acao=formcadastro">Cadastrar Retirante</a></li>
			<li><a href="main.php?url=retirante&acao=listar">Listar Retirantes</a></li>
		</ul>
	</li>
	<li><a href="#">Relat�rios</a>
		<ul>
			<li><a href="main.php?url=relatorio&acao=produto">Produtos</a></li>
			<li><a href="main.php?url=relatorio&acao=fornecedor">Fornecedores</a></li>
			<li><a href="main.php?url=relatorio&acao=retirante">Retirantes</a></li>
			<li><a href="main.php?url=relatorio&acao=entrada">Entrada</a></li>
			<li><a href="main.php?url=relatorio&acao=saida">Saida</a></li>
		</ul>
	</li>
	<li><a href="#">Usu�rios</a>
		<ul>
			<li><a href="usuario.php">Cadastrar</a></li>
		</ul>
	</li>
	<li><a href="logout.php">logout</a>		
	</li>
	
</ul>
</div>

  
  <p>&nbsp;</p>
  
  
  <div id="Content"><?php include 'application/view/'.$url.'.phtml'; ?></div>
</div>


</body>

</html>
