<?php
require_once  $_SERVER['DOCUMENT_ROOT']."/controller/init.php";
$listaUsuario = unserialize($_SESSION['usuario']);
$usuario = $listaUsuario[0];
$perfilUsuarioLogado = $usuario['perfilUsuario'];
$idUsuarioLogado = $usuario['idUsuario'];
$nomeUsuarioLogado = $usuario['nomeUsuario'];
$loginUsuarioLogado = $usuario['loginUsuario'];

$_SESSION['perfilUsuarioLogado'] = $perfilUsuarioLogado;
$_SESSION['idUsuarioLogado'] = $idUsuarioLogado;
$_SESSION['nomeUsuarioLogado'] = $nomeUsuarioLogado;
$_SESSION['loginUsuarioLogado'] = $loginUsuarioLogado;


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
   <div class="panel panel-scet">
  <div class="panel-body">
    Aqui fica A logomarca e um banner
  </div>
</div>
   

   <!-- Single button -->
   
   <?php   
   if($perfilUsuarioLogado == "A"){
 ?>
   
   <div>
   <a href="painel.php?menuid=cdu1" class="btn btn-scet  " role="button" aria-disabled="true" target="painel">Categorias</a>
   <a href="painel.php?menuid=cdu2" class="btn btn-scet  " role="button" aria-disabled="true" target="painel">Tipos de Planos</a>
   <a href="painel.php?menuid=cdu3" class="btn btn-scet  " role="button" aria-disabled="true" target="painel">Usuários</a>
   <a href="painel.php?menuid=cdu6" class="btn btn-scet  " role="button" aria-disabled="true" target="painel">Atrativos</a>
   
   </div>
   
 <?php    
   }else{
 ?>  	
   	   
		<form action="painel.php" name="enviaPainel" method="get" target="painel">
     		<input type="hidden" name="menuid" value="cdu3">
     		<input type="submit" value="administrar">
     		
		</form>
			

   	  	
 <?php   
   }
   ?>


   PAINEL
   <div style=" width:90% ">
    <iframe src="painel.php" name="painel" height="880" width="80%" scrolling="no" frameborder="1" ></iframe>
   </div>
  
  
   
    <div class="panel panel-scet">
  <div class="panel-body">
    Aqui fica O rodapé
  </div>
</div>

<!-- fim - area de producao -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
</body>


</html>


