<?php 
require_once  $_SERVER['DOCUMENT_ROOT']."/controller/init.php";
require_once  $_SERVER['DOCUMENT_ROOT']."/controller/controller.php";
$formAlterar = $_SESSION['alterar'];

$controller = new Controller();
?>


<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  </head>

    <!-- inicio - area de producao -->
<?php
if(isset($_POST['clicouEmPesquisa'])){
	if((trim($_POST['pesquisa']))!= ""){
		$resultado = $controller->controllerConsultarTudo($_POST['pesquisa']);
	}else{
		$resultado = $controller->controllerConsultarTudo("all");
	}
	echo
	"
<div class=\"table-responsive\">
	<table border=\"1\" class=\"table table-striped table-bordered table-hover table-condensed \">
	";
	if($resultado == false){
		exit;
	}
	foreach ($resultado as $foto){
		$id =    $foto->getIdFoto();
		$nome =  $foto->getNomeFoto();
		$alterar = "<a href=\"http://localhost/view/painel.php?menuid=CDU8&id=$id&logica=alterar\" target=\"painel\">Alterar</a>";
		echo"
			<tr>
				<td>
					$nome
				</td>
				<td>
					$alterar
				</td>
				
			</tr>	
		
		";
	}
	
	
	
	echo "</table>
	</div>
	";
}	



?>

<!-- fim - area de producao -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
</body>


</html>

