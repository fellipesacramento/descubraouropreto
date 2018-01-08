<?php
require_once  $_SERVER['DOCUMENT_ROOT']."/controller/init.php";
require_once $_SERVER['DOCUMENT_ROOT']."/view/frontend/salvar.php";

require_once $_SERVER['DOCUMENT_ROOT']."/controller/controller.php";

	$controller =  new Controller();
	$controller->setVarGet($_GET);
	$controller->setVarPost( $_POST);
	$controller->controllerTrataForm();
	$controller->ControllerPreencheForm();



?>


<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
  </head>

    <!-- inicio - area de producao -->


<form  action="" method="post" target="_self" name="formGravar" enctype="multipart/form-data">
	    <input type="hidden" name="enviado" value="ok">			  
		<label for="nomeFoto">Nome:</label>
 		<input type="text" class="form-control" id="nomeFoto" name="nomeFoto" value="<?php echo $nomeFoto ?>">
 		<label for="arqFoto">Selecione a foto:</label>
 		<input type="file" class="form-control" id="arquivo" name="arquivo" > 
 		
   		     
</form>
<!-- fim - area de producao -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
</body>


</html>