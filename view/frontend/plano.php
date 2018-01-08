<?php
require_once $_SERVER['DOCUMENT_ROOT']."/controller/init.php";
$_SERVER['REQUEST_URI']="";
$cdu = $_SESSION['cdu'];
global $logica;

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

    <!-- inicio - area de producao -->
<?php 
if($cdu == "CDU4" && $logica =="alterar"){
echo <<<st
<span">
<a href="http://localhost/view/painel.php?menuid=cdu5" class="btn btn-scet  " role="button" aria-disabled="true" target="painel">Plano</a>
</span>
st;

}
?> 


<!-- fim - area de producao -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
</body>


</html>