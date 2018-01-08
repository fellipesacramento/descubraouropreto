<?php
require_once $_SERVER['DOCUMENT_ROOT']."/controller/init.php";

//if(isset($_GET[]))


?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   

    <!-- link para o arquivo CSS do Bootstrap -->
    <link href="/view/css/bootstrap.css" rel="stylesheet">       
    
    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->

  </head>
<body>
    <!-- inicio - area de producao -->
    
<?php 

if(isset($_GET['logica'])){
	$logica = $_GET['logica'];
	if(isset($_GET['id'])){
		$id=$_GET['id'];
	}else{
		$id="";
	}
	

}else{
	$logica="";
	$id="";
}


//cabecalho($_SESSION['nomeCadastro'],$_SESSION['cdu']);
cabecalho($_SESSION['nomeCadastro']);

require_once $_SERVER['DOCUMENT_ROOT']."/view/frontend/consulta.php";

echo "<div style=\" z-index:9;\"> ";

require_once $_SERVER['DOCUMENT_ROOT']."/view/frontend/incluir.php";
require_once $_SERVER['DOCUMENT_ROOT']."/view/frontend/salvar.php";
require_once $_SERVER['DOCUMENT_ROOT']."/view/frontend/voltar.php";
require_once $_SERVER['DOCUMENT_ROOT']."/view/frontend/excluir.php";
require_once $_SERVER['DOCUMENT_ROOT']."/view/frontend/album.php";
require_once $_SERVER['DOCUMENT_ROOT']."/view/frontend/atrativos.php";
require_once $_SERVER['DOCUMENT_ROOT']."/view/frontend/plano.php";
require_once $_SERVER['DOCUMENT_ROOT']."/view/frontend/estabelecimento.php";
require_once $_SERVER['DOCUMENT_ROOT']."/view/frontend/inserirFoto.php";

echo "</div>";

echo"
formGeralSel
<div>
<iframe src=\"formGeralSel.php?logica=$logica&id=$id\" name=\"formGeralSel\" id=\"formGeralSel\" height=\"1080\" width=\"100%\" scrolling=\"no\" frameborder=\"1\" ></iframe>
</div>
";
?> 


<!-- fim - area de producao -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
</body>


</html>