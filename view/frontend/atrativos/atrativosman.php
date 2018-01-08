<?php
require_once  $_SERVER['DOCUMENT_ROOT']."/controller/init.php";
require_once $_SERVER['DOCUMENT_ROOT']."/controller/controller.php";
require_once  $_SERVER['DOCUMENT_ROOT']."/model/Entity/AppEntityTipoAtrativo.php";


	$controller =  new Controller();
	$controller->setVarGet($_GET);
	$controller->setVarPost( $_POST);
	$controller->controllerTrataFormAtrativos();
	//$controller->ControllerPreencheForm();*/
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
	<br><br>
	<hr width="100%"/>
<?php
function recuperaAtrativos(){
    
	global $entityManager;
		
	$stmt = "SELECT a  FROM AppEntityTipoAtrativo a";     
    $query = $entityManager->createQuery($stmt);
    $estabelecimento = $_SESSION['mapa']['idEstabelecimentoSelecionado'];
    
    $stmt2 = "SELECT a  FROM AppEntityAtrativo a where a.idEstabelecimento = ".$estabelecimento;
    $query2 = $entityManager->createQuery($stmt2);
      
    try {
    	$listaTipoAtrativo = $query->getResult();
    	$listaAtrativo = $query2->getResult();
    	
    
    	
    	If (count($listaTipoAtrativo) >=0) {
    		foreach ($listaTipoAtrativo as $tipoAtrativo){
    			$id =    $tipoAtrativo->getIdTipoAtrativo();
    			$nome =  $tipoAtrativo->getNomeTipoAtrativo();
    			$checked = "";
    			foreach($listaAtrativo as $lista){
    				if($id == $lista->getIdTipoAtrativo()){
    					$checked = "checked";
    				}
    				
    			}
    			
    			echo"    			
    				<input type=\"checkbox\" name=\"tipoAtrativo$id\" value=\"$id\" $checked > $nome			
    		
    			";
    		}
    		
    
    	}else{
    		echo "<font color=red>Nenhum atrativo selecionado </font>";
    	}
    } catch (Exception $e) {
    	echo $e;
    
    }    		
}
?>

<span style="position: absolute; top: 70px; left: 10px; width: 90%; height: 61px; z-index:-1"> 
ATRATIVOS

<form  action="" method="post" target="_self" name="formGravar">
	    <input type="hidden" name="enviado" value="ok">			  
		<?php if(isset($_SESSION['mapa']['idEstabelecimentoSelecionado'])){recuperaAtrativos();} ?>	
    
</form>
</span>

   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
</body>


</html>
