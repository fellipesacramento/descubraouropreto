<?php
require_once $_SERVER['DOCUMENT_ROOT']."/controller/init.php";
require_once $_SERVER['DOCUMENT_ROOT']."/controller/controller.php";
/*
if(isset($_GET['id'])){
	$_SESSION['mapa']['idAlbumSelecionado'] = $_GET['id'];
	
}*/


	$controller =  new Controller();
	$controller->setVarGet($_GET);
	$controller->setVarPost( $_POST);
	$controller->controllerTrataForm();
	$controller->ControllerPreencheForm();

	
?>

<html>
<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   


  </head>

    <!-- inicio - area de producao -->
<span style="position: absolute; top: 70px; left: 10px; width: 90%; height: 61px; z-index:-1"> 
<div class="formulario">  
<form  action="" method="post" target="_self" name="formGravar">
	    <input type="hidden" name="enviado" value="ok">			  
		<label for="nomeCategoria">Nome:</label>
 		<input type="text" class="form-control g" id="nomeAlbum" name="nomeAlbum" value="<?php echo $nomeAlbum ?>"> 
 		
 		
   		     
</form>
</div>
</span>
<!-- fim - area de producao -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
</body>



</html>