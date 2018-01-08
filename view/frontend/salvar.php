<?php
require_once $_SERVER['DOCUMENT_ROOT']."/controller/init.php";

//$pathFormConsulta = $_SESSION['consultar'];
?>
  
<!DOCTYPE html>
<html lang="pt-br">
  

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   

    <!-- link para o arquivo CSS do Bootstrap -->
    <link href="/view/css/bootstrap.css" rel="stylesheet">  
     <link href="/view/css/posicao.css" rel="stylesheet">       
    
    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->

  </head>
<body>
  
    <!-- inicio - area de producao -->
<?php 
if(isset($_GET['logica'])){
if($_GET['logica'] == 'incluir' || $_GET['logica'] == 'alterar' ){
echo <<<str
<script language="javascript">
	function gravar(){
		var meuIframe= document.getElementById("formGeralSel");
		var conteudoIframe= meuIframe.contentDocument || meuIframe.contentWindow.document; 
		var form = conteudoIframe.formGravar;		
		form.submit();
	}
</script> 
	<button type="button" name="gravar"  class="btn btn-scet" onclick="javascript:gravar();">Gravar</button>
str;
}
}
?> 

<!-- fim - area de producao -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
</body>


</html>



 
