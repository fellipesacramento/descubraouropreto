<?php
require_once  $_SERVER['DOCUMENT_ROOT']."/controller/init.php";
require_once $_SERVER['DOCUMENT_ROOT']."/controller/controller.php";
require_once $_SERVER['DOCUMENT_ROOT']."/model/Entity/AppEntityCategoria.php";
require_once  $_SERVER['DOCUMENT_ROOT']."/model/Entity/AppEntityPlano.php";

	$controller =  new Controller();
	$controller->setVarGet($_GET);
	$controller->setVarPost( $_POST);
	$controller->controllerTrataForm();
	$controller->ControllerPreencheForm();

	if(isset($_GET['id'])){		
		$_SESSION['mapa']['idEstabelecimentoSelecionado'] = $_GET['id'];
	}
	
	function listaCategoria(){
		$stmt = "SELECT c  FROM AppEntityCategoria c";
		global $entityManager;
		$query = $entityManager->createQuery($stmt);
		try {
			$resultado = $query->getResult();
		
			If (count($resultado) >0) {
					
				foreach ($resultado as $categoria){
					$nome = $categoria->getNomeCategoria();
					$id = $categoria->getIdCategoria();
					if($id == $_POST['idCategoria']){
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
	
	function listaPlano(){
		$stmt = "SELECT p  FROM AppEntityPlano p";
		global $entityManager;
		$query = $entityManager->createQuery($stmt);
		try {
			$resultado = $query->getResult();
	
			If (count($resultado) >0) {
					
				foreach ($resultado as $plano){
					$nome = $plano->getCodPlano();
					$id = $plano->getIdPlano();
					if($id == $_POST['idPlano']){
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
    <!-- link para o arquivo CSS do Bootstrap -->
    <link href="/view/css/bootstrap.css" rel="stylesheet">       
    
    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->

  </head>

  </head>
<body>
    <!-- inicio - area de producao -->
<br><br>
<span style="position: absolute; top: 70px; left: 10px; width: 90%; height: 61px; z-index:-1"> 
<div class="formulario">  
<form  action="" method="post" target="_self" name="formGravar" enctype="multipart/form-data">
	    <input type="hidden" name="enviado" value="ok">		
	     <input type="hidden" name="idUsuario" value="<?php echo $idUsuario ?>">		  
		<label for="sloganEstabelecimento">Slogan:</label>
 		<input type="text" class="form-control g" id="sloganEstabelecimento" name="sloganEstabelecimento" value="<?php echo $sloganEstabelecimento ?>"> 
 		<label for="razaoSocialEstabelecimento">Razão Social:</label>
 		<input type="text" class="form-control g " id="razaoSocialEstabelecimento" name="razaoSocialEstabelecimento" value="<?php echo $razaoSocialEstabelecimento ?>"> 		
 		<label for="nomefantasiaEstabelecimento">Nome Fantasia:</label>
 		<input type="text" class="form-control g " id="nomeFantasiaEstabelecimento" name="nomeFantasiaEstabelecimento" value="<?php echo $nomeFantasiaEstabelecimento ?>"> 
 		<label for="descricaoEstabelecimento g ">Descrição:</label> 		
 		<textarea class="form-control g" rows="3"  id="descricaoEstabelecimento" name="descricaoEstabelecimento" value="<?php echo $descricaoEstabelecimento ?>" ></textarea>
 		 <label for="idCategoria">Categoria:</label>
  		<select class="form-control g" id="idCategoria" name="idCategoria">
   			 <?php listaCategoria(); ?>
  		</select>
  		<label for="idPlano">Plano:</label>
  		<select class="form-control g " id="idPlano" name="idPlano">
   			 <?php listaPlano(); ?>
  		</select>
  		<?php 
  		    if(isset($_SESSION['mapa']['idEstabelecimentoSelecionado'])){
  		    	echo"
					<label for=\"arqFoto\">Selecione a foto:</label>
 					<input type=\"file\" class=\" g filestyle \" id=\"arquivo\" name=\"arquivo\"> 
			
				";
  		    }
  		?>
  		 	
    
</form>
</div>
</span>  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
        
</body>


</html>
