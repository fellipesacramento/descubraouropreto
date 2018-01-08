<?php
require_once  $_SERVER['DOCUMENT_ROOT']."/controller/init.php";
require_once  $_SERVER['DOCUMENT_ROOT']."/controller/controller.php";
require_once  $_SERVER['DOCUMENT_ROOT']."/model/Entity/AppEntityTipoPlano.php";

	$controller =  new Controller();
	$controller->setVarGet($_GET);
	$controller->setVarPost( $_POST);
	$controller->controllerTrataForm();
	$controller->ControllerPreencheForm();

	if(isset($_GET['id'])){		
		$_SESSION['mapa']['idPlanoSelecionado'] = $_GET['id'];
	}
	

	function listaTipoPlano(){
		$stmt = "SELECT tp  FROM AppEntityTipoPlano tp";
		global $entityManager;
		$query = $entityManager->createQuery($stmt);
		try {
			$resultado = $query->getResult();
	
			If (count($resultado) >0) {
					
				foreach ($resultado as $tipoPlano){
					$nome = $tipoPlano->getNomeTipoPlano();
					$id = $tipoPlano->getIdTipoPlano();
					if($id == $_POST['idTipoPlano']){
						$checked = "checked";
					}else{
						$checked = "";
					}
					echo"<option value=\"$id\" $checked >$nome</option>";
	
				}
					
	
			}else{
				echo "<font color=red><center>Nenhum Registro Encontrado</center> </font>";
				return false;
			}
		} catch (Exception $e) {
			echo $e;
		}
	
	}
	
	
?>



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
<form  action="" method="post" target="_self" name="formGravar" id="formGravar">
	    <input type="hidden" name="enviado" value="ok">	
	  	<label for="codPlano">Codigo:</label>
		<input type="text" class="form-control p " id="codPlano" name="codPlano" value="<?php echo $codPlano ?>">
		<label for="cnpjPlano" >CNPJ:</label>
 		 <input type="text" class="form-control m" id="cnpjPlano" name="cnpjPlano" value="<?php echo $cnpjPlano ?>"> 
 		 <label for="idTipoPlano">Tipo Plano:</label>
 		<select class="form-control m " id="idTipoPlano" name="idTipoPlano">
   			 <?php listaTipoPlano(); ?>
  		</select>   		     
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


