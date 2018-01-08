<?php
require_once $_SERVER['DOCUMENT_ROOT']."/controller/init.php";
require_once $_SERVER['DOCUMENT_ROOT']."/model/Entity/AppEntityCategoria.php";
require_once  $_SERVER['DOCUMENT_ROOT']."/model/Entity/AppEntityAtrativo.php";


 function gravarAtrativos($entityManager){	
 		$post = $_POST;
 		$idEstabelecimento = $_SESSION['mapa']['idEstabelecimentoSelecionado'];
 		
	
 	try {
 		foreach ($post as $idTipoAtrativo){
 			if($idTipoAtrativo != "ok"){ 
 				$atrativo = new AppEntityAtrativo();
 				$atrativo->setIdTipoAtrativo($idTipoAtrativo);
 				$atrativo->setIdEstabelecimento($idEstabelecimento);
 				$entityManager->persist($atrativo);
 				$entityManager->flush();
 			}
 			
 		}
 		
 	} catch (Exception $e) {
 		echo $e;
 			
 			
 	}
	
}

function excluirAtrativos($entityManager){
	    $estabelecimento = $_SESSION['mapa']['idEstabelecimentoSelecionado'];	
	try {		
		
		$d = $entityManager->createQuery('delete from AppEntityAtrativo a where a.idEstabelecimento = '.$estabelecimento);
		$numDeleted = $d->execute();		
	} catch (Exception $e) {
		echo $e;			
			
	}
		
}

function consultarTudoAtrativos(){
	
		$stmt = "SELECT a  FROM AppEntityAtrativo a";
	
	return $stmt;
}


function preencheFormAtrativos($entidade){
	global $nomeCategoria;
	global $statusCategoria;
	
	
	if(isset($entidade)){
		$nomeCategoria = $entidade->getNomeCategoria();
		$statusCategoria = $entidade->getStatusCategoria();
	}else{
		$nomeCategoria = "";
		$statusCategoria = "";
	}
	
}


?>