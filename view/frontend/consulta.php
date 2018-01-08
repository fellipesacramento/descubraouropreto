<?php
require_once $_SERVER['DOCUMENT_ROOT']."/controller/init.php";
$nomeServidor =  $_SERVER['HTTP_HOST'];

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
    
    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
 
 
 
 
 <style type="text/css">
   
   .frmConsulta{
    z-index: 9;
    border: 1px solid;
    width: 750px !important;
    margin: auto;
   
   
   }  
   
   </style>


  </head>
<body>

    <!-- inicio - area de producao -->
<?php 
echo <<<str
<div class="formulario">  
 <form action= "http://$nomeServidor/view/frontend/formGeralSel.php" target="formGeralSel" method="POST">
 <input type="hidden" name="clicouEmPesquisa" value="ok" >
  <div class="col-lg-18">
    <div class="input-group "> 
		
      <span class="input-group-btn frmConsulta">
		<input type="text" class="form-control g "  name="pesquisa" >
        <button class="btn btn-default " type="submit" >Pesquisar</button>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->

</form>
</div>  
<br>
str

?> 

<!-- fim - area de producao -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
</body>


</html>



 
