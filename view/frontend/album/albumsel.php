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
	<table border=\"1\">
	";
	if($resultado == false){
		exit;
	}
	foreach ($resultado as $album){
		$id =    $album->getIdAlbum();
		$nome =  $album->getNomeAlbum();
		$alterar = "<a href=\"http://localhost/view/painel.php?menuid=CDU7&id=$id&logica=alterar\" target=\"painel\">Alterar</a>";
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
	
	";
}	



?>
</html>
